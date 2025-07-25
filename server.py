import http.server
import socketserver
import json

PORT = 8000

class MyHandler(http.server.SimpleHTTPRequestHandler):
    def do_GET(self):
        if self.path == '/api/schedule':
            try:
                with open('schedule.json', 'r') as f:
                    schedule_data = json.load(f)

                self.send_response(200)
                self.send_header('Content-type', 'application/json')
                self.send_header('Access-Control-Allow-Origin', '*') # Untuk CORS
                self.end_headers()
                self.wfile.write(json.dumps(schedule_data).encode('utf-8'))
            except FileNotFoundError:
                self.send_error(404, "Schedule data not found")
        else:
            super().do_GET()

with socketserver.TCPServer(("", PORT), MyHandler) as httpd:
    print("serving at port", PORT)
    httpd.serve_forever()
