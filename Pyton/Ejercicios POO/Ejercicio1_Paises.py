#Defina:
#Clase Pais con los siguientes atributos: nombre,población y área.
#
#Dos métodos: más  grande  que y densidad  de población.
#
#    más grande que: Devuelve true si este país es más grande que otro
#(que pasamos por parámetro).
#
#    densidad de población: Devuelve la densidad de población (población dividida por superficie).
#
#Realice un programa en Python que compare las superficies de España y Francia y calcule e imprima las
#densidades de población de ambos.
#
#Datos:
#    España: 46.770.000 habitantes y 504.645 km^2
#    Francia: 66.030.000 habitantes y 640.679 km^2

class Pais:#defnición de la función Pais, donde se instancia el objeto
    def __init__(self, nombre, poblacion, area):#defino el constructor con los atributos pedidos
        self.nombre = nombre
        self.poblacion = poblacion
        self.area = area

    def masGrandeQue(self, pais): #definición del método Mas Grande que
        return self.area > pais.area

    def densidadDePoblacion(self):#definición del método densidad de población
        return self.poblacion / self.area

if __name__ == '__main__': #Creo el programa pedido, con los datos de cada pais

    pais1 = Pais("España", 46770000, 504645)
    pais2 = Pais("Francia", 66030000, 640679)

#Con el condicional if controlo que pais introducido es más grande y lo uso para imprimir el resultado

    if (pais1.masGrandeQue(pais2)):
        print(pais1.nombre, "con área de: ", pais1.area, "en Km^2, es más grande que: ", pais2.nombre,
              "con área de: ", pais2.area, "km^2")
    else:
        print(pais1.nombre, "con área de: ", pais1.area, "en Km^2, es más pequeño que: ", pais2.nombre,
              "con un área de", pais2.area, "Km^2")
    print(pais1.nombre, " tiene una densidad población de ", round(pais1.densidadDePoblacion(), 2), "habitantes por "
         "Km^2 y ", pais2.nombre, "tiene una densidad de población de", round(pais2.densidadDePoblacion(),
         2), "habitantes por Km^2")