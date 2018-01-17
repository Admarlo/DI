class Libro: #Creación de la clase Libro
    autores=[]
    def __init__(self,titulo,autores,editorial,isbn,precio): #definición de la función y del constructor

        self.titulo = titulo
        self.autores = autores
        self.editorial=editorial
        self.isbn = isbn
        self.precio=precio

        """
        python_libro = Libro(
        "Practical Programming",
        ["Campbell", "Gries", "Montojo"],
        "Pragmatic Bookshelf",
        "978 - 1 - 93778 - 545 - 1",25.0)
        >>>python_libro.titulo
        Practical Programming
        >>>python_libro.autores
        [Campbell, Gries, Montojo]
        >>>python_libro.editor
        Pragmatic Bookshelf
        >>>python_libro.isbn
        978 - 1 - 93778 - 545 - 1
        >>>python_libro.precio
        25.0
        """

        """
        >>>python_libro.num_autores()
        3
        """
    def num_autores(self): #Creación del método num_autores.
            return len(self.autores)


if __name__ == '__main__':#Creación del programa, con los datos introducidos

    python_libro = Libro("Practical Programming",["Campbell", "Gries", "Montojo"],
                         "Pragmatic Bookshelf","978 - 1 - 93778 - 545 - 1",25.0)

    print(python_libro.titulo)
    print(python_libro.autores)
    print(python_libro.editorial)
    print(python_libro.isbn)
    print(python_libro.precio)
    print(python_libro.num_autores())
