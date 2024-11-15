from django.shortcuts import render

# Create your views here.
def index(request):
    return render(request, 'mainapp/index.html', {
        'title':'Inicio',
        'content':'Inicio index'
    })

def about(request):
    return render(request, 'mainapp/about.html', {
        'title':'Acerca de',
        'content':'Probando'
    })

def mision(request):
    return render(request, 'mainapp/mision.html', {
        'title':'Prueba misión',
        'content':'Probando2'
    })

def vision(request):
    return render(request, 'mainapp/vision.html', {
        'title':'Vision'
    })