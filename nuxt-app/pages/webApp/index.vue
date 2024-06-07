<template>
  <div class="container">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.1.2/dist/tailwind.min.css" rel="stylesheet">
    <nav class="sidebar">
      <ul>
        <li><NuxtLink to="/">Home</NuxtLink></li>
        <li><NuxtLink to="/about">About</NuxtLink></li>
        <li><NuxtLink to="/services">Services</NuxtLink></li>
        <li><NuxtLink to="/contact">Contact</NuxtLink></li>
      </ul>
    </nav>
    <main class="content">
      <div>
        <div class="rounded border-solid border-gray-100 w-80"><!-- 外枠 -->
          <div class="flex"><!-- 上部img+icon -->
            <div><!-- 左上img -->
              <div>img</div>
              <p>This is the web app page.</p>
            </div>
            <div><!-- 右上 商品説明 -->
              <h2>商品名</h2>
              <p>商品説明</p>
            </div>
          </div>
          <div class="flex"><!-- imgアイコンエリア -->
            <div><!-- 上部アイコン -->
              <div>icon</div>
              <div>icon</div>
              <div>icon</div>
              <div>icon</div>
            </div>
            <div><!-- 下部アイコン -->
              <div>icon</div>
              <div>icon</div>
              <div>icon</div>
              <div>icon</div>
            </div>
          </div>
          <div class="flex"><!-- メーカー・ECボタンエリア -->
            <div>ボタン</div>
            <div>ボタン</div>
            <div>ボタン</div>
          </div>
        </div>

      </div>
    </main>
  </div>
</template>

<script>
export default {
};
</script>

<style scoped>
.container {
  display: flex;
  height: 100vh;
}

.sidebar {
  width: 200px;
  background-color: #333;
  color: #fff;
  height: 100%;
  position: fixed;
  display: flex;
  flex-direction: column;
  padding-top: 20px;
}

.sidebar ul {
  list-style-type: none;
  padding: 0;
  margin: 0;
}

.sidebar ul li {
  padding: 15px;
  text-align: center;
}

.sidebar ul li a {
  color: #fff;
  text-decoration: none;
  display: block;
}

.sidebar ul li a:hover {
  background-color: #575757;
}

.content {
  margin-left: 200px;
  padding: 20px;
  width: calc(100% - 200px);
  overflow: auto;
}
</style>