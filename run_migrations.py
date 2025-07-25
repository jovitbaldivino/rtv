#!/home/jules/.pyenv/shims/python
import os
import django
from django.core.management import call_command
from django.conf import settings

def main():
    os.environ.setdefault("DJANGO_SETTINGS_MODULE", "rtv_backend.settings")

    # Configure settings manually
    settings.configure(
        SECRET_KEY = "dummy-key",
        INSTALLED_APPS = [
            "django.contrib.admin",
            "django.contrib.auth",
            "django.contrib.contenttypes",
            "django.contrib.sessions",
            "django.contrib.messages",
            "django.contrib.staticfiles",
            "news",
        ],
        DATABASES = {
            "default": {
                "ENGINE": "django.db.backends.sqlite3",
                "NAME": "db.sqlite3",
            }
        },
        DEFAULT_AUTO_FIELD = "django.db.models.BigAutoField"
    )

    django.setup()
    call_command('migrate')

if __name__ == "__main__":
    main()
