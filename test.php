<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .main {
  display:flex;
  --s: 100px;  /* size  */
  --m: 4px;    /* space */
  --r: calc(var(--s) + 4*var(--m) - 2px);
}

.container {
  font-size: 0; /*disable white space between inline block element */
}

.container div {
  width: var(--s);
  margin: var(--m);
  height: var(--s);
  display: inline-block;
  font-size:initial;
  clip-path: polygon(50% 0, 100% 50%, 50% 100%, 0 50%);
  background: red;
  margin-bottom: calc(var(--m) - var(--s)*0.5);
}
.container div:nth-child(odd) {
  background:green;
}
.container::before {
  content: "";
  width: calc(var(--s)/2 + var(--m));
  float: left;
  height: 140%;
  shape-outside: repeating-linear-gradient(     
                   #0000 0 calc(var(--r) - 3px),      
                   #000  0 var(--r));
} 
    </style>
</head>
<body>

</body>
</html>



<div class="main">
  <div class="container">
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
  </div>
</div>