<!DOCTYPE html>
<html>
  <head>
      <?php include 'head.php'; ?>
  </head>
  <body>
      <div class="shizzo-header" id="app">
        <?php $header_title = "Login"; $header_subtitle = "dont have an account? sign up."; include 'nav.php'; ?>
        <template>
          <section id="page">
            <div class="card">
              <p class="card-header-title">Login</p>
              <div class="card-content">
                <p class="content">
                  <b-field label="Username"><b-input v-model="name"></b-input></b-field>
                  <b-field label="Password"><b-input v-model="name"></b-input></b-field>
                  <b-checkbox>Remember Me?</b-checkbox>
                  <div style="height: 5px;"></div>
                  <b-button type="is-primary">Login</b-button>
                </p>
              </div>
            </div>
          </section>
        </template>
      </div>
      <script src="https://unpkg.com/vue"></script>
      <script src="https://unpkg.com/buefy/dist/buefy.min.js"></script>
      <script src="https://unpkg.com/buefy/dist/components/table"></script>
      <script src="https://unpkg.com/buefy/dist/components/input"></script>
      <script>
          new Vue({
              el: '#app'
          })
      </script>
    </div>
  </body>
</html>