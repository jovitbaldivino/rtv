from django.db import models

class Schedule(models.Model):
    event_name = models.CharField(max_length=200)
    event_time = models.CharField(max_length=50)

    def __str__(self):
        return f"{self.event_name} at {self.event_time}"
