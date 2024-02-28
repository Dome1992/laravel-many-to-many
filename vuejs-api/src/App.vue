<script setup> //IMPORTIAMO APICONTENT
import ApiContent from './components/ApiContent.vue'
</script>

 <template> <!--IMPORTIAMO IL TEMPLATE DI APICONTENT -->
  <ApiContent />
</template>

<style scoped>
.logo {
  height: 6em;
  padding: 1.5em;
  will-change: filter;
  transition: filter 300ms;
}
.logo:hover {
  filter: drop-shadow(0 0 2em #646cffaa);
}
.logo.vue:hover {
  filter: drop-shadow(0 0 2em #42b883aa);
}
</style>
