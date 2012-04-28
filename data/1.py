import re

fd1=open('authors', 'r')

reg=r'[a-я|А-Я|ё| ]*'
pat=re.compile(reg)
reg2=r'[^ ].*[^ ]'
pat2=re.compile(reg2)
for line in fd1:
  #print(line)
  z=pat.findall(line)
  for x in z:
    
