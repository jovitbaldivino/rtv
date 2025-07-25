from django.http import JsonResponse
from .models import Schedule

def schedule_list(request):
    schedules = Schedule.objects.all().order_by('event_time')
    data = {"schedules": list(schedules.values("event_name", "event_time"))}
    return JsonResponse(data)
