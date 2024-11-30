from django.shortcuts import render,HttpResponse, redirect
from django.http import Http404
""" from django.contrib.auth.forms import UserCreationForm """
from django.contrib import messages
from django.contrib.auth import authenticate, login, logout
from django.contrib.auth.decorators import login_required
from articulos.models import Article,Category


# Create your views here.
@login_required(login_url='iniciosesion')
def list_art(request):
    
    articulos=Article.objects.all()
    
    return render(request,'articulos/listado_art.html',{
        'title':'Articulos',
        'content':'listado de articulos',
        'articulos':articulos
    })
    
    
    
@login_required(login_url='iniciosesion')
def list_cat(request):
    
    categorias= Category.objects.all()  
    
    return render(request,'categorias/listado_cat.html',{
        'title':'Categorias',
        'content':'listado de categorias',
        'categorias':categorias 
    })