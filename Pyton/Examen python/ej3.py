"""
Realiza un programa en Python llamado ej3.py​ que gestione e imprima en
pantalla los libros y autores de una pequeña “editorial” con los siguientes datos.
Completa los ejemplos​ ​en​ ​la​ ​docstring​ ​y​ ​luego​ ​escribe​ ​el​ ​cuerpo​ del
programa con la función descrita.
"""
class Libro:
    def __init__(self, titulo, autores, editor, isbn, precio):
        """
        (Libro, ​ ​ str, ​ ​ list ​ ​ of ​ ​ str, ​ ​ str, ​ ​ str, ​ ​ number) ​ ​ -> ​ ​ NoneType
        Crea ​un ​nuevo ​libro ​titulado ​titulo, ​escrito ​por ​autores, publicado ​por ​ editor,
        ​con ​ISBN ​isbn ​y ​precio ​de ​coste ​en ​euros.
        """
        self.titulo = titulo
        self.autores = autores
        self.editor = editor
        self.isbn = isbn
        self.precio = precio
    """
    python_libro = Libro(
    "Practical Programming",
    ["Campbell", "Gries", "Montojo"],
    "Pragmatic Bookshelf",
    "978 - 1 - 93778 - 545 - 1",
    25.0)
    
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


    def num_autores(self):
        return len(self.autores)

    """
    >>>python_libro.num_autores()
    
    3
    
    """

python_libro = Libro(
    "Practical Programming",
    ["Campbell", "Gries", "Montojo"],
    "Pragmatic Bookshelf",
    "978 - 1 - 93778 - 545 - 1",
    25.0)

print(python_libro.titulo)
print(python_libro.autores)
print(python_libro.editor)
print(python_libro.isbn)
print(python_libro.precio)

print(python_libro.num_autores())