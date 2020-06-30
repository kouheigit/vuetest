<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>Hello, World!</title>
  <script src="https://cdn.jsdelivr.net/npm/vue"></script>
</head>
<body>
<div id="app">
  {{ message }}
</div>
<script>
  new Vue({
    el: '#app',
    data: {
      message: 'Hello World!'
    }
  })
</script>
</body>
</html>
