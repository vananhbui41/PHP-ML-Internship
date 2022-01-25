## CheckEquals

Give two arrays $a and $b of integers, write a function checkEquals() that check if two
arrays contain same values.

```
function checkEquals($a, $b); // Return boolean
```

Example:

```
checkEquals([1,2,3], [3,1,2]); // Return true
checkEquals([1,2,5,2], [5,2,1,2]); // Return true
checkEquals([1,2,5,2], [5,2,1]); // Return false
```

Do not use Built in Functions except: `array_push`, `array_splice`, `array_sum`, `array_pop`, `array_push`, `count`, `array_key`, `array_map`

## String Normalization

Give a string `$str`, write a function to `normalize` it, i.e, remove all consecutive spaces
& newlines and spaces &new lines at two ends.

```
// Return a new string with all multiple spaces removed, spaces at two ends remove
function normalize($str);
```

Example:

```
normalize(" ab   cdef   g "); // Return "ab cdef g"
```

## Integer to Roman

Roman numerals are represented by seven different symbols: `I`, `V`, `X`, `L`, `C`, `D` and `M`.

```
Symbol       Value
I             1
V             5
X             10
L             50
C             100
D             500
M             1000
```

For example, two is written as `II` in Roman numeral, just two one's added together. Twelve is written as, `XII`, which is simply `X` + `II`. The number twenty seven is written as `XXVII`, which is `XX + V + II`.

Roman numerals are usually written largest to smallest from left to right. However, the numeral for four is not `IIII`. Instead, the number four is written as `IV`. Because the one is before the five we subtract it making four. The same principle applies to the number nine, which is written as `IX`. There are six instances where subtraction is used:

- `I` can be placed before `V` (5) and `X` (10) to make 4 and 9.
- `X` can be placed before `L` (50) and `C` (100) to make 40 and 90.
- `C` can be placed before `D` (500) and `M` (1000) to make 400 and 900.

Given an integer, convert it to a roman numeral. Input is guaranteed to be within the range from **1** to **3999**.
