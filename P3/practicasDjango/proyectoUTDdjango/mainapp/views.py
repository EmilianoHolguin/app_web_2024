from django.shortcuts import render, redirect

# Create your views here.

def index(request):
    return render(request, 'mainapp/index.html', {
        'title':'Inicio',
        'content':'.::Bienvenido::.'
    })

def about(request):
    return render(request, 'mainapp/about.html', {
        'title':'Acerca de',
        'content':'.::Somos una::.'
    })

def mision(request):
    return render(request, 'mainapp/mision.html', {
        'title':'Mision',
        'content':'.::Somos una::.'
    })

def vision(request):
    return render(request, 'mainapp/vision.html', {
        'title':'Vision'
    })

#REDIRIGIR A PAGINA DE INICIO ERROR 404 1ERA FORMA
#def error404(request, exception):
    #return redirect('inicio')


#REDIRIGIR A PAGINA DE INICIO ERROR 404 2DA FORMA
def error404_2(request,exception):
    return render(request,'mainapp/404.html')