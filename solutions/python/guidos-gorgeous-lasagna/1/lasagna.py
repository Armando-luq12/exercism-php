"""Functions used in preparing Guido's gorgeous lasagna.

Learn about Guido, the creator of the Python language:
https://en.wikipedia.org/wiki/Guido_van_Rossum

This is a module docstring, used to describe the functionality
of a module and its functions and/or classes.
"""


#TODO: define your EXPECTED_BAKE_TIME (required) and PREPARATION_TIME (optional) constants below.


#TODO: Remove 'pass' and complete the 'bake_time_remaining()' function below.
def bake_time_remaining():
    """Calculate the bake time remaining.

    :param elapsed_bake_time: int - baking time already elapsed.
    :return: int - remaining bake time (in minutes) derived from 'EXPECTED_BAKE_TIME'.

    Function that takes the actual minutes the lasagna has been in the oven as
    an argument and returns how many minutes the lasagna still needs to bake
    based on the `EXPECTED_BAKE_TIME`.
    """

    pass


#TODO: Define the 'preparation_time_in_minutes()' function below.
# To avoid the use of magic numbers (see: https://en.wikipedia.org/wiki/Magic_number_(programming)), you should define a PREPARATION_TIME constant.
# You can do that on the line below the 'EXPECTED_BAKE_TIME' constant.
# This will make it easier to do calculations, and make changes to your code.



#TODO: define the 'elapsed_time_in_minutes()' function below.



# TODO: Remember to go back and add docstrings to all your functions
#  (you can copy and then alter the one from bake_time_remaining.)

EXPECTED_BAKE_TIME = 40


def elapsed_time_in_minutes(number_of_layers, elapsed_bake_time):
    """Calculate the elapsed cooking time.

    :param number_of_layers: int - the number of layers in the lasagna.
    :param elapsed_bake_time: int - elapsed cooking time.
    :return: int - total time elapsed (in minutes) preparing and cooking.

    This function takes two integers representing the number of lasagna layers and the
    time already spent baking and calculates the total elapsed minutes spent cooking the
    lasagna.
    """

print('Duracion de la lasagna', EXPECTED_BAKE_TIME, 'minutos')

def bake_time_remaining(tiempo_al_momento):
 """Se le resta el tiempo que lleva la lasagna en el horno"""

 lleva = EXPECTED_BAKE_TIME - tiempo_al_momento

 return lleva

a = 10
resta = bake_time_remaining(a)

print ('Aun le restan', resta , 'minutos')

def preparation_time_in_minutes(number_of_layers):
 """cada capa vale 2 minutos de tiempo""" 
 
 capa = 2
 mult = capa * number_of_layers

 return mult

b = 2

suma = preparation_time_in_minutes(b)

print ('Si agregas  dos capas se aumentarian', suma , 'minutos')

def elapsed_time_in_minutes(number_of_layers, elapsed_bake_time):
 """esta funcion suma el tiempo de numero de capas y el tiempo que lleva en el horno"""
 
 number_of_layers = preparation_time_in_minutes(number_of_layers)

 tiempo_real = number_of_layers + elapsed_bake_time

 return tiempo_real

total = elapsed_time_in_minutes(3, 20)
capas = preparation_time_in_minutes(3)
print('Se agregaron', capas, 'capas, la lasagna lleva un tiempo de horneado de', total, 'minutos')
