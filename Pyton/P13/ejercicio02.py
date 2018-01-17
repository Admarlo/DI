#Programa 2: 
#Trata de adivinar un número.
#Se genera un número de 0 a 10 de forma aleatoria.
#Se  solicita  repetidamente  que  se introduzca  uno  desde  teclado para adivinarlo.

import random

n = random.randint(0, 10)
#Trato del error si el número no es entero
try:
	nDado= int(input("Deme un número del 1 al 10 para adivinar: "))
except ValueError:
	print("Debe introducir un número entero")
#Si no salta el error hacemos el cálculo del número
else:
	while n != nDado:
			try:
				nDado = int(input("Respuesta incorrecta, introduzca otro número:"))
			except ValueError:
				print("Debes introducir un número entero")
	print("Enhorabuena, lo ha adivinado, el número es: ", n)
