#Definir una función isVowel2 (char) que devuelve True si char 
#es una vocal ("a","e","i","o",o"u"), y False en caso contrario. 
#Se puede asumir que char es una sola letra de cualquier caso 
#(es decir,'A' y 'a' son ambos válidos). Esta función es similar al
#problema anterior-pero esta vez, utilice la palabra clave “in”. 
#Su función debe tomar en una sola cadena y devolver un valor lógico..

#Definición de la función
def isVowel2(char):
	#Definición de la lista de vocales
	vocal = ["a", "e", "i", "o", "u"]
	#recorro la lista con un bucle for donde el índice i adopta 
	#la definición de la lista type(char)
	for i in vocal:
		#Inserto condicional if para que la vocal introducida quede en minúscula
		if (char.lower() == i):
			#Devuelve True sinó un False
			return True
	return False	