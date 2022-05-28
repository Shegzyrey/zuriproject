
word1 = input("input word1: ")
word2 = input("input word2: ")

def check(word1, word2):
    word1 = word1.upper()
    word2 = word2.upper()

    if sorted(word1) == sorted(word2):
        return True 
        
    else:
        return False 

print(check(word1, word2))
