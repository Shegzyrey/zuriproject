import random
#decalring variables
R="rock"
P="papper"
S="scissors"

#creating constraint with while loop
while True:
    #list of possibilities
    L=[R,P,S]
#user input
    print("options available are: \n R = " +R+ "\n P = " + P +"\n S = " + S + "\n")
    option = input("Enter option:" )
    if option.upper() == "R":
        player = R
    elif option.upper() == "P":
        player = R
    elif option.upper() == "S":
        player = S
    else:
        print("Enter valid option")
    
    #computer choice
    cpu = random.choice(L)

    print(f"\nPlayer ({player}):CPU ({cpu}).\n")

    #game draw
    if player == cpu:
        print(f"\nIt's a tie!: CPU chose ({cpu}) and you chose({player}).\n")
    elif player == R:
        if cpu == S:
            print("Rock smashes scissors! You win!")
        else:
            print("Paper covers rock! You lose.")
    elif player == P:
        if cpu == R:
            print("Paper covers rock! You win!")
        else:
            print("Scissors cuts paper! You lose.")
    elif player == S:
        if cpu == P:
            print("Scissors cuts paper! You win!")
        else:
            print("Rock smashes scissors! You lose.")
            
    #break out loop
    replay = input("want to contiue game? (y/n): ")
    if replay.lower() != "y":
        break