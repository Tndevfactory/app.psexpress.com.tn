<template>
  <div class="">
    <div class="row gx-4">
      <div
        class="col-12 shadow col-md-8 invoice my-3 d-flex justify-content-center flex-column align-items-center"
        style="background-color: #fff"
      >
        <h5 class="text-center mb-5">Facture #889076</h5>

        <div class="row" style="background-color: #fff">
          <div class="col-6 psexpress">
            <div class="d-flex justify-content-start">
              <h6
                class="d-inline-block text-capitalize mx-1"
                style="color: rgb(0, 0, 9)"
              >
                psexpress
              </h6>
            </div>
            <div class="info mt-2 p-2">
              <span class="mdi mdi-cellphone-wireless d-none d-md-inline-block">
              </span>
              <a
                href="tel:+21655385666"
                target="_blank"
                class="info-link text-decoration-none text-dark"
              >
                +21655385666</a
              ><br />
              <span class="mdi mdi-email-plus-outline d-none d-md-inline-block">
              </span>
              <a
                href="mailto:team@psexpress.com.tn"
                target="_blank"
                class="info-link text-decoration-none text-dark"
              >
                team@psexpress.com.tn</a
              ><br />
              <span class="mdi mdi-google-maps d-none d-md-inline-block">
              </span>
              <a
                href=" https://www.google.tn/maps/place/Psexpress/@36.8519697,10.2654375,17z/data=!3m1!4b1!4m5!3m4!1s0x12e2b5856ff17ecb:0x703b88463328308!8m2!3d36.8519697!4d10.2676262
          "
                target="_blank"
                class="info-link text-decoration-none text-dark"
              >
                Immeuble El Mesk Bloc C-C14 , 1073 Montplaisir, Tunis</a
              ><br />
            </div>
          </div>
          <div class="col-6 loggued_seller">
            <div class="d-flex justify-content-start">
              <h6
                class="d-inline-block text-capitalize mx-1"
                style="color: rgb(0, 0, 9)"
              >
                Client: loggued seller
              </h6>
            </div>
            <div class="info mt-2 p-2">
              <span class="mdi mdi-cellphone-wireless d-none d-md-inline-block">
              </span>
              <a
                href="tel:+21655385666"
                target="_blank"
                class="info-link text-decoration-none text-dark"
              >
                +21655385666</a
              ><br />
              <span class="mdi mdi-email-plus-outline d-none d-md-inline-block">
              </span>
              <a
                href="mailto:team@psexpress.com.tn"
                target="_blank"
                class="info-link text-decoration-none text-dark"
              >
                team@psexpress.com.tn</a
              ><br />
              <span class="mdi mdi-google-maps d-none d-md-inline-block">
              </span>
              <a
                href=" https://www.google.tn/maps/place/Psexpress/@36.8519697,10.2654375,17z/data=!3m1!4b1!4m5!3m4!1s0x12e2b5856ff17ecb:0x703b88463328308!8m2!3d36.8519697!4d10.2676262
          "
                target="_blank"
                class="info-link text-decoration-none text-dark"
              >
                Immeuble El Mesk Bloc C-C14 , 1073 Montplaisir, Tunis</a
              ><br />
            </div>
          </div>
          <div class="col-12 invoice_cart">
            <table class="table mt-4 mb-3" style="font-size: 0.8rem">
              <thead class="table-secondary">
                <tr>
                  <th scope="col">Product</th>
                  <th scope="col">Quantity</th>
                  <th scope="col">Pu</th>

                  <th scope="col">Discount</th>
                  <th scope="col">Taxe</th>
                </tr>
              </thead>
              <tbody>
                <tr v-for="cart in getCart" :key="cart.id">
                  <td>{{ cart.product_name }}</td>
                  <td>{{ cart.qty }}</td>
                  <td>{{ cart.price }}</td>

                  <td>{{ cart.discount_value }}</td>
                  <td>{{ cart.tax }}%</td>
                </tr>
              </tbody>
            </table>
          </div>
          <div
            class="col-12 col-md-6 signature d-flex justify-content-end flex-column"
          >
            <div class="mb-4" style="font-size: 0.8rem">
              payable dans 15 jours
            </div>
          </div>
          <div class="col-12 col-md-6 compta">
            <table class="table" style="font-size: 0.8rem">
              <tbody>
                <tr>
                  <td>Total qty</td>
                  <td>{{ getCompta.total_qty }}</td>
                </tr>
                <tr>
                  <td>Totat_price_ht</td>
                  <td>{{ getCompta.totat_price_ht }}</td>
                </tr>
                <tr>
                  <td>totat_discount</td>
                  <td>{{ getCompta.totat_discount }}</td>
                </tr>
                <tr>
                  <td>total_taxes</td>
                  <td>{{ getCompta.total_taxes }}</td>
                </tr>
                <tr>
                  <td>shipment_fee</td>
                  <td>{{ getCompta.shipment_fee }}</td>
                </tr>
                <tr>
                  <td>total_ttc_before_coupon</td>
                  <td>{{ getCompta.total_ttc_before_coupon }}</td>
                </tr>
                <tr>
                  <td>coupon</td>
                  <td>0.000</td>
                </tr>
                <tr>
                  <td>total_ttc_before_coupon</td>
                  <td>{{ getCompta.total_ttc_before_coupon }} DT</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div
        class="col-12 px-4 shadow-sm col-md-4 bg-white blue-card d-flex flex-column justify-content-start align-items-center"
      >
        <h6 class="text-center mb-2">paiment method</h6>
        <table class="table" style="font-size: 0.8rem">
          <tbody>
            <tr>
              <td>total_ttc_before_coupon</td>
              <td>{{ getCompta.total_ttc_before_coupon }} DT</td>
            </tr>
          </tbody>
        </table>
        <div class="d-grid gap-2 col-12 mb-4">
          <button class="btn btn-primary" type="button">Pay now</button>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { mapGetters, mapActions } from "vuex";

export default {
  name: "PayOps",

  components: {},

  data() {
    return {
      lab: false,
    };
  },

  props: ["csrfToken", "currency", "language", "productId"],

  computed: {
    ...mapGetters([
      "getCart",
      "getCompta",
      "getCartCounter",
      "getCartTotal",
      "getUser",
      "loading",
      "success",
      "error",
      "lang",
    ]),
  },

  methods: {
    ...mapActions(["setLogin", "setLang"]),
  },

  created() {
    this.$i18n.locale = this.lang;
    this.selectedLanguage = this.lang;
    this.setLang(this.selectedLanguage);
    // console.log(this.language);
    this.url = window.axios.defaults.url;
    this.appEnv = window.axios.defaults.appEnv;
    // console.log(this.appEnv);
    // console.log(this.url);
  },
};
</script>

<style lang="scss" scoped>
.counter_link {
  position: relative;
  color: #000;
  padding: 0 !important;
  .counter_count {
    display: flex;
    justify-content: center;
    align-items: center;
    position: absolute;
    background-color: red;
    color: white;
    font-weight: 500;
    padding: 0.2rem;
    width: 1.5rem;
    height: 1.5rem;
    border-radius: 50%;
    top: -1.3rem;
    left: 1rem;
    font-size: 0.8rem;
    text-align: center;
  }
  .counter_total {
    display: inline-block;
    font-size: 0.8rem;
  }
}
</style>
