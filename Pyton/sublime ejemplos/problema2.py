#Definir una función isVowel (char) que devuelve True si char es una 
#vocal​ ("a","e","i","o",o "u"), y False en caso contrario.​ Se puede #asumir que char es una sola letra de​ cualquier caso (es decir, 'A' y 'a' 
#son ambos válidos). 

#Creo y defino la función
def isVowel(char):
	#creo la lista con las vocales
	vocal​ = ["a", "e", "i", "o", "u"]
	#inicio el índice para recorrer la lista con valvor 0
	i = 0
	#utilizo un búcle while para recorrer la lista
	while (i < (len(vocal​)-1)):
		#uso un if para cambiar el caracter introducido a minúscula
		if (char.lower() == voc[i]):
			#entonces devuelve True sinó un  False
			return True
		i += 1	
	return False	
