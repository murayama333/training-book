# No.21

次の関数を定義します。

```
5行x5列の*マークを出力する関数（show_star）
・引数なし、戻り値なし
```

実行結果のとおり出力してください。

## 実行結果

```
*****
*****
*****
*****
*****
```

## ヒント

```php
<?php
function show_star() {
  // TODO
}

show_star();
```

# No.22

次の関数を定義します。

```
指定された行数、列数分の*マークを出力する関数（show_star2）
・引数は$row、$colの2つ、戻り値なし
・引数に指定された個数分の*マークを表示する
```

実行結果のとおり出力してください。

## 実行結果

引数：$row=3, $col=4の場合


```
****
****
****
```

## ヒント

```php
<?php
function show_star2($row, $col) {
  // TODO
}

show_star2(3, 4);
```


# No.23

次の関数を定義します。

```
指定された行数分の*マークを出力する関数（show_star3）
・引数は$row、戻り値なし
・引数に指定された行数分の*マークを表示する
・ただし1行目の*マークは1つ、2行目の*マークは2つのように表示する
```

実行結果のとおり出力してください。

## 実行結果

引数：$row=5の場合

```
*
**
***
****
*****
```

## ヒント

```php
<?php
function show_star3($row) {
  // TODO
}

show_star3(5);
```


# No.24

次の関数を定義します。

```
指定された行数分の*マークを出力する関数（show_star4）
・引数は$row、戻り値なし
・引数に指定された行数分の*マークを表示する
・ただし1行目の*マークはrow個、2行目の*マークはrow - 1個というように表示する
```

実行結果のとおり出力してください。

## 実行結果

引数：$row=5の場合

```
*****
****
***
**
*
```

# No.25

次の関数を定義します。

```
指定された行数分の*マークを出力する関数（show_star5）
・引数は$row、戻り値なし
・引数に指定された行数分の*マークを表示する
・ただし1行目の*マークは1個、2行目の*マークは2個というように表示する
　（行頭の半角スペースの出力を考えること）
```

実行結果のとおり出力してください。

## 実行結果

引数：$row=5の場合

```
    *
   **
  ***
 ****
*****
```

# No.26

次の関数を定義します。

```
指定された行数分の*マークを出力する関数（show_star6）
・引数は$row、戻り値なし
・引数に指定された行数分の*マークを表示する
・ただし1行目の*マークは1個、2行目の*マークは3個というように表示する
```

実行結果のとおり出力してください。

## 実行結果

引数：$row=4の場合

```
   *
  ***
 *****
*******
```

# No.27

次の関数を定義します。

```
引数の文字列にh1タグを修飾して出力する関数（print_h1）
・引数は$contents、戻り値なし
```


実行結果のとおり出力してください。

## 実行結果

引数：$contents="Hello"の場合

```html
<h1>Hello</h1>
```

## ヒント

```php
<?php
function print_h1($contents) {
  // TODO
}

print_h1("Hello");
```


# No.28

次の関数を定義します。

```
引数の文字列配列にul、liタグを修飾して出力する関数（print_ul）
・引数は$items、戻り値なし
```

実行結果のとおり出力してください。

## 実行結果

引数：$items = ["apple", "banana", "cherry"]の場合

```html
<ul>
<li>apple</li>
<li>banana</li>
<li>cherry</li>
</ul>
```

## ヒント

```php
<?php
function print_ul($items) {
  // TODO
}

$items = ["apple", "banana", "cherry"];
print_ul($items);
```


# No.29

次の関数を定義します。

```
引数の文字列配列にol(ul)、liタグを修飾して出力する関数（print_list）
・引数は$items、$orderedの2つ、戻り値なし
　・$itemsは文字列配列
　・$orderedは論理値（true,false）
```

実行結果のとおり出力してください。

## 実行結果

引数：$items=["apple", "banana", "cherry"], $ordered=falseの場合

```html
<ul>
<li>apple</li>
<li>banana</li>
<li>cherry</li>
</ul>
```

## 実行結果2

引数：$items=["apple", "banana", "cherry"], $ordered=trueの場合

```html
<ol>
<li>apple</li>
<li>banana</li>
<li>cherry</li>
</ol>
```


## ヒント

```php
<?php
function print_list($items, $ordered) {
  // TODO
}

$items = ["apple", "banana", "cherry"];
print_list($items, false);
```


# No.30

次の関数を定義します。

```
引数の文字列配列にtableタグを修飾して出力する関数（print_table）
・引数は$items、$with_headerの2つ、戻り値なし
　・$itemsは文字列配列
　・$with_headerは論理値（true,false）
```

実行結果のとおり出力してください。

## 実行結果

引数が以下の場合

```php
$items=[
 ["ID", "NAME", "AGE"],
 ["1", "John", "20"],
 ["2", "Paul", "21"],
 ["3", "George", "22"]
];
$with_header=true;
```

次のように表示されること

```html
<table>
<tr><th>ID</th><th>NAME</th><th>AGE</th></tr>
<tr><td>1</td><td>John</td><td>20</td></tr>
<tr><td>2</td><td>Paul</td><td>21</td></tr>
<tr><td>3</td><td>George</td><td>22</td></tr>
</table>
```

## 実行結果

引数が以下の場合

```php
$items=[
 ["1", "John", "20"],
 ["2", "Paul", "21"],
 ["3", "George", "22"]
];
$with_header=false;
```

次のように表示されること

```html
<table>
<tr><td>1</td><td>John</td><td>20</td></tr>
<tr><td>2</td><td>Paul</td><td>21</td></tr>
<tr><td>3</td><td>George</td><td>22</td></tr>
</table>
```

# No.31

次の関数を定義します。

```
掛け算を計算する関数（multiply）
・引数は$x, $y の2つ、戻り値あり
```

実行結果のとおり出力してください。

## 実行結果

```
x=4, y=2: 8
x=9, y=2: 18
x=9, y=0: 0
```

## ヒント

```php
<?php
function multiply($x, $y)
{
  // TODO
}

$x = 4;
$y = 2;
echo "x=$x, y=$y: " . multiply($x, $y);
$x = 9;
$y = 2;
echo "x=$x, y=$y: " . multiply($x, $y);
$x = 9;
$y = 0;
echo "x=$x, y=$y: " . multiply($x, $y);
```

# No.32

次の関数を定義します。

```
割り算を計算する関数（divide）
・引数は$x, $y の2つ、戻り値あり
・ただし、引数$yが0の場合、戻り値に0を返す
```

> 0による除算はエラーとなってしまいます。そのため、ここでは戻り値に0を返却するものとします。

実行結果のとおり出力してください。

## 実行結果

```
x=4, y=2: 2
x=8, y=4: 2
x=9, y=0: 0
```

## ヒント

```php
<?php
function divide($x, $y)
{
  // TODO
}

$x = 4;
$y = 2;
echo "x=$x, y=$y: " . divide($x, $y);
$x = 8;
$y = 4;
echo "x=$x, y=$y: " . divide($x, $y);
$x = 9;
$y = 0;
echo "x=$x, y=$y: " . divide($x, $y);
```


# No.33

次の関数を定義します。

```
三角形の面積を計算する関数（triangle）
・引数は$width, $height の2つ、戻り値あり
・引数$width、$heightのいずれかがマイナスの場合、戻り値に0を返す
```

実行結果のとおり出力してください。

## 実行結果

```
width=4, height=2: 4
width=8, height=4: 16
width=8, height=-1: 0
```

## ヒント

```php
<?php
function triangle($width, $height)
{
  // TODO
}

$width = 4;
$height = 2;
echo "width=$width, height=$height: " . triangle($width, $height);
$width = 8;
$height = 4;
echo "width=$width, height=$height: " . triangle($width, $height);
$width = 9;
$height = 0;
echo "width=$width, height=$height: " . triangle($width, $height);
```


# No.34

次の関数を定義します。

```
正方形の面積を計算する関数（regular_square）
・引数は$length1つ、戻り値あり
・引数$lengthがマイナスの場合、戻り値に0を返す
```

実行結果のとおり出力してください。

## 実行結果

```
length=4: 16
length=8: 64
length=-1: 0
```

# No.35

次の関数を定義します。

```
引数で受け取った配列を昇順ソートする関数（my_sort_asc）
・引数は$array、戻り値あり
```

実行結果のとおり出力してください。

## 実行結果

引数：$array=[24, 21, 24, 18, 28, 32, 24, 25, 29] の場合

```
Asc: 18, 21, 24, 24, 24, 25, 28, 29, 32
```

## ヒント

```php
<?php
function my_sort_asc($array)
{
  // TODO
}

$ages = [24, 21, 24, 18, 28, 32, 24, 25, 29];
$sorted_ages = my_sort_asc($ages);
echo "ASC: " . implode(", ", $sorted_ages) . PHP_EOL;
```


# No.36

次の関数を定義します。

```
引数で受け取った配列を降順ソートする関数（my_sort_desc）
・引数は$array、戻り値あり
```

実行結果のとおり出力してください。

## 実行結果

array={24, 21, 24, 18, 28, 32, 24, 25, 29} の場合

```
Desc: 32, 29, 28, 25, 24, 24, 24, 21, 18
```

## ヒント

```php
<?php
function my_sort_desc($array)
{
  // TODO
}

$ages = [24, 21, 24, 18, 28, 32, 24, 25, 29];
$sorted_ages = my_sort_desc($ages);
echo "ASC: " . implode(", ", $sorted_ages) . PHP_EOL;
```

# No.37

次の関数を定義します。

```
引数で受け取った配列を降順ソートする関数（my_sort）
・引数は$array、$ascの2つ
・引数の$ascがtrueの場合、$array配列を昇順でソートする。
　　　　$ascがfalseの場合、$array配列を降順でソートする。
　　　　$ascが省略された場合は、$array配列を昇順でソートする。
```

実行結果のとおり出力してください。

## 実行結果

引数：$array=[24, 21, 24, 18, 28, 32, 24, 25, 29], $ascがtrue の場合

```
18, 21, 24, 24, 24, 25, 28, 29, 32
```

## 実行結果

引数：$array={24, 21, 24, 18, 28, 32, 24, 25, 29} 、$ascがfalseの場合

```
32, 29, 28, 25, 24, 24, 24, 21, 18
```

## 実行結果

引数：$array=[24, 21, 24, 18, 28, 32, 24, 25, 29], $ascの指定が省略された場合

```
18, 21, 24, 24, 24, 25, 28, 29, 32
```

## ヒント

```php
<?php
function my_sort($array, $asc)
{
  // TODO
}

$ages = [24, 21, 24, 18, 28, 32, 24, 25, 29];
$asc = true;
$sorted_ages = my_sort($ages, $asc);
echo implode(", ", $sorted_ages) . PHP_EOL;
```

# No.38

次の関数を定義します。

```
階乗を計算する関数（fraction）
・引数は$n、戻り値あり
階乗の考え方
・引数$nが1の場合、戻り値に1を返す
・引数$nが2の場合、戻り値に2を返す
・引数$nが3の場合、戻り値に6を返す
```


実行結果のとおり出力してください。

## 実行結果

```
args=1: 1
args=2: 2
args=3: 6
```

## ヒント

```php
<?php
function fraction($n)
{
  // TODO
}

$args = [1, 2, 3];
foreach ($args as $arg) {
  echo "args=$arg: " . fraction($arg) . PHP_EOL;
}
```

# No.39

次の関数を定義します。

```
順列を計算する関数（permutation）
・引数は配列$n、$r、戻り値あり
順列の考え方
・引数$nが5, $rが1の場合、戻り値に5を返す
・引数$nが5, $rが2の場合、戻り値に20を返す
・引数$nが5, $rが3の場合、戻り値に60を返す
```

実行結果のとおり出力してください。

## ヒント

```php
<?php
function permutation($n, $r)
{
  // TODO
}

$args = [[5, 1], [5, 2], [5, 3]];
foreach ($args as $arg) {
  $n = $arg[0];
  $r = $arg[1];
  echo "args=:[$n,$r]" . fraction($n, $r) . PHP_EOL;
}
```

## 実行結果

```
args=[5,1]: 5
args=[5,2]: 20
args=[5,3]: 60
```

# No.40

次の関数を定義します。

```
組み合わせを計算する関数（combination）
・引数は配列$n、$r、戻り値あり
組み合わせの考え方
・引数$nが5, $rが1の場合、戻り値に5を返す
・引数$nが5, $rが2の場合、戻り値に10を返す
・引数$nが5, $rが3の場合、戻り値に10を返す
```

実行結果のとおり出力してください。

## 実行結果

```
args=[5,1]: 5
args=[5,2]: 10
args=[5,3]: 10
```

## ヒント

```php
<?php
function combination($n, $r)
{
  // TODO
}

$args = [[5, 1], [5, 2], [5, 3]];
foreach ($args as $arg) {
  $n = $arg[0];
  $r = $arg[1];
  echo "args=:[$n,$r]" . combination($n, $r) . PHP_EOL;
}
```
