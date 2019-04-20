import csv
n = 0
#open('hoteles.csv', 'w', encoding="utf8") as hoteles:
with open('hoteles_habitaciones.csv', 'r', encoding="utf8") as file:
    reader = csv.reader(file, delimiter=',')
    for row in reader:
        n += 1
        if n%200 == 0:
            print(n)
        if len(row) == 10:
            #for element in row:
            #    hoteles.write(str(element))
            filina = row
        elif len(row)> 10:
            filina = row
            if 'Depto' in filina[2]:
                filina[1] = filina[1] + filina.pop(2)
                if len(filina) != 10:
                    print('---1---\n', filina)
            else:
                filina[0] = filina[0] + filina.pop(1)
                if len(filina) != 10:
                    print('---2---\n', filina)
        else:
            filina = row[0].split(',')
            if 'Depto' in filina[2]:
                filina[1] = filina[1] + filina.pop(2)
                if len(filina) != 10:
                    print('---3---\n', filina)
            else:
                filina[0] = filina[0] + ',' + filina.pop(1)
                if len(filina) != 10:
                    if 'Depto' in filina[2]:
                        filina[1] = filina[1] + filina.pop(2)
                        if len(filina) != 10:
                             print('---4---\n', filina)
        
