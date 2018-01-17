#Programa  1:
#Toma  un  número  desde  el  teclado  y  nos devuelve sus divisores.
#Si no se introduce un número nos da un mensaje de error

#Creo una función para añadir a una lista que elimine los datos repetidos
def borraRepetidos(lista):
    listaNoRepetida = []
    
    for i in lista:
        if i not in listaNoRepetida:
            listaNoRepetida.append(i)
    return listaNorepetida

#Uso un try para capturar la introducción del numero. Saltará cuando el núero introducido no sea entero.
try:
	x = int(input("Deme un número entero: "))
except ValueError:
	print("Debe introducir un número entero")
#Si el error no salta, paso a realizar el cálculo de los divisores
else:
	listaDiv = list()

	for i in range(1, int(x**.5) + 1):
		if (x % i == 0):
			listaDiv.append(i)
			listaDiv.append(int(x / i))
	listaDiv = borraRepetidos(listaDiv)
	listaDiv = sorted(listaDiv)

	print("Divisores de", x, "son:", listaDiv)
