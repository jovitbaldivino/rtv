import unittest
from unittest.mock import Mock
from server import MyHandler
import json

class TestMyHandler(unittest.TestCase):
    def test_schedule_endpoint(self):
        # Buat file schedule.json dummy
        with open('schedule.json', 'w') as f:
            json.dump({"schedules": [{"event_name": "Test Event", "event_time": "12.00 WIB"}]}, f)

        # Buat mock request
        request = Mock()
        request.makefile.return_value = None

        # Buat instance handler
        handler = MyHandler(request, ('localhost', 8000), Mock())
        handler.path = '/api/schedule'
        handler.wfile = Mock()

        # Panggil do_GET
        handler.do_GET()

        # Periksa apakah send_response dipanggil dengan 200
        handler.send_response.assert_called_with(200)

        # Periksa apakah data yang benar ditulis
        written_data = handler.wfile.write.call_args[0][0]
        self.assertEqual(json.loads(written_data), {"schedules": [{"event_name": "Test Event", "event_time": "12.00 WIB"}]})

if __name__ == '__main__':
    unittest.main()
