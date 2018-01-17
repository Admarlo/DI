



class Miembro:
    def __init__(self, nombre, edad, dni):
        self.nombre = nombre
        self.edad = edad
        self.dni = dni

class Profesor(Miembro):

    docente = []

    def __init__(self, nombre, edad, dni, numRegistro):
        Miembro.__init__(self, nombre, edad, dni)
        self.numRegistro = numRegistro

    def anadirDocencia(self, docente):
        self.docente.append(docente)
        print("La docencia", "\"" + docente.nombre + "\" ha sido añadida.")

class Estudiante(Miembro):
    def __init__(self, nombre, edad, dni, numEstudiante):
        Miembro.__init__(self, nombre, edad, dni)
        self.numEstudiante = numEstudiante

class Asignatura:
    def __init__(self, nombre, codigo):
        self.nombre = nombre
        self.codigo = codigo



if __name__ == '__main__':
    profesor1 = Profesor("Luis", 50, 34567, 5001)
    estudiante1 = Estudiante("Luisito", 20, 56678, 1001)
    asignatura1= Asignatura("Matemáticas", 5)
    asignatura2 = Asignatura("Álgebra", 7)

    profesor1.anadirDocencia(asignatura1)
    profesor1.anadirDocencia(asignatura2)

    print("Datos:\nProfesor:")
    print("Nombre:", profesor1.nombre, "Edad:", profesor1.edad, "DNI:", profesor1.dni, "Nº Registro:",
          profesor1.numRegistro)
    print("Estudiante:\nNombre:", estudiante1.nombre, "Edad:", estudiante1.edad, "DNI:", estudiante1.dni,
          "Nº Estudiante:", estudiante1.numEstudiante)
    print("Asignaturas:\nNombre:", asignatura1.nombre, "Código asignatura:", asignatura1.codigo, "\nNombre:",
          asignatura2.nombre, "Código:", asignatura2.codigo)