
#Escriba un programa que haga backup (copia de seguridad) de un fichero de texto.
#Para ello:
#- Mediante el teclado tome el nombre del fichero de texto del que quiera hacer el backup.
	#- Cree el nombre del nuevo fichero, que contendrá el backup,añadiéndole al original 'bak.txt'.
	#- Abra el fichero original.
	#- Lea el fichero original línea a línea y escríbalas en el nuevo.
	#- Cierre los ficheros.
#Este ejercicio no esta comentado ya que en el mismo enunciado queda explicado paso a paso

nombre = input("Nombre del fichero de texto del que quiera hacer un backup: ")
fichero = open(nombre)
backup = open(nombre + "bak.txt", "w")
for line in fichero:
    backup.write(line)
fichero.close()
backup.close()
