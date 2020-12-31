<!DOCTYPE html>
<html>
  <head>
      <?php include 'head.php'; ?>
  </head>
  <body>
      <div class="shizzo-header" id="app">
        <?php $header_title = "Sign Up"; $header_subtitle = "have an account? login."; include 'nav.php'; ?>
        <template>
          <section id="page">
            <div class="card">
              <p class="card-header-title">Sign Up</p>
              <div class="card-content">
                <p class="content">
                  <b-field label="Username">
                    <b-input v-model="name"></b-input>
                  </b-field>
                  <b-field label="Age (13+ Required to sign up!)">
                    <b-numberinput v-model="number"></b-numberinput>
                  </b-field>
                  <b-field label="Password">
                    <b-input v-model="name"></b-input>
                  </b-field>
                  <b-field label="Confirm Password">
                    <b-input v-model="name"></b-input>
                  </b-field>
                  <div style="height: 5px;"></div>
                  <b-button type="is-primary">Sign Up</b-button>
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