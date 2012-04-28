fd=open("fixtures/test.yml", 'w')
import re

fd1=open('authors', 'r')

reg=r'[a-я|А-Я|ё| ]*'
pat=re.compile(reg)
reg2=r'[^ ].*[^ ]'
pat2=re.compile(reg2)
rr=[]
for line in fd1:
  #print(line)
  z=pat.findall(line)
  rrr=[]
  for x in z:
      if x!='':
        for f in pat2.findall(x):
          if f!='':
            rrr.append(f)
  if len(rrr)>0:
    rr.append(rrr)
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

string3="""    status: Нашел
    person_id: 1
    code: 1
"""
def ggg():
  return "'"+str(ra.randrange(2011, 2013, 1))+'-'+str(ra.randrange(1,13,1))+'-'+str(ra.randrange(1,28,1))+"'"

print(string1+"\nBooks:", file=fd)
for i in range(99):
  try:
    print("  admin"+str(i)+':\n'+'    author: '+rr[i][0]+'\n    name: '+rr[i][1]+'\n'+string3+'    date_of: '+ggg(), file=fd)
  except:
    pass
