
#new try

high = input("Insert High Of Number : ")

nint = high
i = 0;
try :
    while high > 0 :
        print '\n',
        for i in range(high) :
            print high,
        high -= 1

except VelueError :
    print("input must integer")


