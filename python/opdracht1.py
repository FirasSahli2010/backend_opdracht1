import sys

def fizzbuzz(start = 0, end = 15, fizz_num=3, buzz_num=5):
  """
  Prints numbers in increasing order, replacing multiples of `fizz_num` with "Fizz"
  and multiples of `buzz_num` with "Buzz". Multiples of both are replaced with "FizzBuzz".

  Args:
    start: The starting number (inclusive) (default: 0).
    end: The ending number (inclusive) (default: 15).
    fizz_num: The number to be replaced with "Fizz" (default: 3).
    buzz_num: The number to be replaced with "Buzz" (default: 5).
  """
  for i in range(start, end + 1):
    output = ""
    if i % fizz_num == 0:
      output += "Fizz"
    if i % buzz_num == 0:
      output += "Buzz"
    print(output if output else i)

# Example usage with custom numbers
if __name__ == '__main__':
    if( len(sys.argv) >=4 ):
        start = int(sys.argv[1])
        end = int(sys.argv[2])
        FizzNum = int(sys.argv[3])
        BuzzNum = int(sys.argv[4])
    else:
        start = 0
        end = 15
        FizzNum = 3
        BuzzNum = 15
    fizzbuzz(start, end, FizzNum, BuzzNum)
