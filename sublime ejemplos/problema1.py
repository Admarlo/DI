#Escribir una pieza de código Python que imprime uno de los 
#siguientes mensajes:
#"Cadena involucrada", si bien varA o varB son cadenas
#"Grande" si varA es mayor que varB
#"Igual" si varA es igual a varB
#"Más pequeño" si varA es menor que varB
#Escribir el código asumiendo varA y varB ya están definidos.

varA=17
varB=10
if type (varA) == str or type (varB) == str:
	print("Cadena involucrada")
if varA>varB:
	print("Grande")
elif varA<varB:
	print("Pequeño")
elif varA==varB:
	print("Igual")
