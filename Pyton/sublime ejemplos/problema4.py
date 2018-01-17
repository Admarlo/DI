#Escribir un programa que cuenta el número de vocales  
#que figuran en la cadena s. Vocales válidos son: 
#"a","e","i","o" y "u". 

#Partiré desde el ejercicio 2, utilizando la misma función.
def isVowel2(char):
	vocal = ["a", "e", "i", "o", "u"]
	for i in vocal:
		if (char.lower() == i):
			return True
	return False

#Creo la cadena a introducir, inicializando la la variable para 
#recorrer la cadena introducida a cero.
s = input("Deme los carácteres para analizar: ")
num_Voc = 0
#Utilizo el método isVolwel para conttar el número de vocales introducidas
for i in s:
	if(isVowel2(i)):
		num_Voc += 1
#Imprimo el número de vceces que se repiten las vocales
print("¿Cuantas vocales hay?: \n ", num_Voc)