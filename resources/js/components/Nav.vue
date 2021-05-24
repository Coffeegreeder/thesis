<template>
  <nav>
    <div v-for="link in links">
      <router-link :to="link.href"> {{ link.title }}</router-link>
    </div>
  </nav>
</template>

<script>
    export default {
      name: "v-nav",
      data(){
        return {
            links: [
              {
                title: "главная  ",
                href: "/"
            },
            {
              title: "создать шаблон   ",
              href: "/create"
            },
            {
              title: "информация",
              href: "/about"
            }
          ]
        }
      }
    }
</script>
