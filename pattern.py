

text =(input(" Supply Text String: ")).upper()
find =(input(" Supply Text String: ")).upper()

#THIS IS THE CLASS OF CSC812


count = 0
addup = 0
count_inner = 0
failed = 0
location_index_found = 0
status='A'
for letters in text:
    strflag = text[count:len(find)+count]
    if(len(strflag)==len(find)):
        print(strflag)
        location_index_found += 1

        if(strflag==find):
            addup +=len(find)
            status ='Match found'
            break

        for items in strflag:
            if(items==find[count_inner]):
                addup+=1
                count_inner+=1

            else:
                failed += 1
                count_inner=0
                break

    count += 1
print(f"The Complexity is {addup+failed}")
if(status=='A'):
    print(f"Match Not Found")
else:
    print(f"{status}  {location_index_found}")







