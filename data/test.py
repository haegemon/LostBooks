fd=open("fixtures/test.yml", 'w')
import random as ra
string1="""Person:
  admin:
    id: 1
    code: 645
    name: Admin
    people_group: 071
    adress: 7-402
    email: stanislavkaledin@rambler.ru

BooksTypes:
  founded:
    booktype: Нашел
  searching:
    booktype: Ищу
"""

string3="""    author: author
    name: lalala
    status: Нашел
    person_id: 1
    code: 1
    date_of: '1993-06-23'
"""
print(string1+"\nBooks:", file=fd)
for i in range(100):
  print("  admin"+str(i)+':\n'+string3, file=fd)
