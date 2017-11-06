"""Realice una funcion area_triangulo que retorne el area de un triangulo.
Funcion con dos parametros y con retorno.
Realice una funcion longitud_seg que sume la
longitud de un numero variable de segmentos. Si se
utiliza sin aportar ningun valor devolvera 0.
Funcion con parametros variables de entrada y retorno.
Incorpore estas dos funciones en un programa que las
utilice y muestre en pantalla los resultados, con las
explicaciones adecuadas. Ilustre algunos casos."""

#pido los valores de la base y la altura
b=int(input("Deme el valor de la base: "))
h=int(input("Deme el valor de la altura: "))

#Defino la función area_triangulo
def area_triangulo (b, h):

#realizo el calculo del area con los parámetros introducidos por teclado y se devuelve el valor del area	
	area = (b*h)/2
	return area

print("Siendo la base, ",b, " y la altura, ",h," el area del triangulo es: ", area_triangulo(b, h))

#definición de la función de la suma de longitudes, en la cual el valor de n recoge todas las longitudes de los 
#segmentos introducidos en la función definida en el print
def longitud_seg (*n):
    sumar = 0 #Asigno cero, para que al no introducir ninguna longitud, la función devuelva cero
    for i in n: #a i le agisno n
        sumar += i #aqui se realiza el sumatorio de las longitudes de los segmentos introducidos en la definición de la función
    return sumar
print("Cuatro segmentos con longitudes: 2, 8, 10 y 45, la longitud total sera: ", longitud_seg(2,8,10,45))


