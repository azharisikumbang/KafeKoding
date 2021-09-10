from django.contrib import admin
from django.urls import path, include
from django.conf.urls.static import static
from . import views

urlpatterns = [
    path('admin/', admin.site.urls),
    path('', views.index),
    path('login/', views.masuk),
    path('postingan/', views.postingan),
    path('logout/', views.keluar),
    path('ujicoba/', views.ujicoba),
    path('crud/', views.crud),
    path('create/', views.create),
]
