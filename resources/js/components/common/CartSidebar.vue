<template>
  <div>
    <b-sidebar
      id="sidebar-backdrop"
      title="panier"
      :backdrop-variant="variant"
      backdrop
      shadow
      right
      class="side"
      width="400px"
    >
      <!-- <template #footer="{ hide }">
        <div
          class="d-flex bg-light text-light justify-content-between align-items-center px-3 py-2"
        >
          <b-button size="md" @click="hide" variant="outline-primary"
            >fermer</b-button
          >
        </div>
      </template> -->

      <template #default="{ hide }">
        <div class="p-3">
          <!-- <h4>{{ lang }}</h4> -->
          <div class="d-flex justify-content-end">
            <a
              class="btn btn-outline-danger btn-sm"
              @click.prevent="deleteAllCart"
              >Delete all <i class="mdi mdi-trash-can-outline"></i
            ></a>
          </div>

          <table class="table table_cart my-2">
            <thead class="table-secondary fs-6">
              <tr>
                <th scope="col">Name</th>
                <th scope="col text-center">Qty</th>
                <th scope="col text-center nowrap">Price</th>

                <th scope="col">Delete</th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="cart in getCart" :key="cart.id">
                <td class="text-nowrap" style="font-size: 0.7rem">
                  {{ cart.product_name }}
                </td>
                <td>
                  <select
                    :id="cart.id"
                    class="form-select form-select-sm"
                    aria-label=".form-select-sm example"
                    @change="stockSelect($event)"
                    style="font-size: 0.8rem; max-width: 4.1rem"
                  >
                    <option
                      v-for="stk in cart.product_stock_quantity"
                      :key="stk"
                      :value="stk"
                      :selected="stk === cart.qty ? 'selected' : ''"
                    >
                      {{ stk }}
                    </option>
                  </select>
                </td>
                <td style="font-size: 0.7rem">{{ cart.price_by_qty }}</td>
                <td class="d-flex justify-content-center">
                  <a
                    class="btn btn-outline-danger btn-sm"
                    @click.prevent="deleteItemCart(cart.id)"
                    ><i class="mdi mdi-trash-can-outline"></i
                  ></a>
                </td>
              </tr>
            </tbody>
            <tfoot>
              <tr>
                <td style="font-size: 0.8rem">Totaux</td>
                <td class="ps-3" style="font-size: 0.8rem">
                  {{ getCartCounter }}
                </td>
                <td colspan="2" style="font-size: 0.8rem">
                  {{ getCartTotal }} DT
                </td>
              </tr>
            </tfoot>
          </table>
          <div class="row g-0 my-3">
            <div class="col-6">
              <label for="coupon" class="fs-6"> Optionel coupon</label>
            </div>
            <div class="col-6">
              <input name="coupon" type="text" class="form-control" />
            </div>
          </div>
          <nav class="mb-3 d-flex justify-content-between align-items-center">
            <b-button variant="primary" block @click="hide"
              >Continuer vos achats</b-button
            ><b-button variant="success" block @click="goPay"
              >Proceder au paiement</b-button
            >
          </nav>
        </div>
      </template>
    </b-sidebar>
  </div>
</template>
<script>
import { mapGetters, mapActions } from "vuex";

export default {
  name: "CartSidebar",

  components: {},

  data() {
    return {
      lab: false,
      variant: "transparent",
      carts: this.getCart,
      selected: "",
    };
  },

  props: ["csrfToken", "currency", "language", "productId"],

  computed: {
    ...mapGetters([
      "getUser",
      "loading",
      "success",
      "error",
      "lang",
      "getCart",
      "getCompta",

      "getCartCounter",
      "getCartTotal",
    ]),
  },

  methods: {
    ...mapActions([
      "setLogin",
      "setLang",
      "deleteAllCart",
      "deleteItemCart",
      "updateQtyItemCart",
    ]),
    stockSelect(event) {
      // console.log("stock select");
      // console.log(event.target.id);
      // console.log(event.target.value);
      let dt = [event.target.id, event.target.value];
      this.updateQtyItemCart(dt);
    },
    goPay() {
      // console.log(this.lang);
      // console.log(window.axios.defaults.url);
      window.location.href = `${window.axios.defaults.url}${this.lang}/paiement`;
      //window.location.href = "http://127.0.0.1:8000/fr/paiement";
    },
  },

  created() {
    this.$i18n.locale = this.lang;
    this.selectedLanguage = this.lang;
    this.setLang(this.selectedLanguage);
    // console.log(this.language);
    this.url = window.axios.defaults.url;
    this.appEnv = window.axios.defaults.appEnv;
    this.carts = this.getCart;
    // console.log(this.appEnv);
    // console.log(this.url);
  },
};
</script>

<style lang="scss" scoped>
.table_cart {
  thead {
    tr {
      th {
        font-size: 1rem !important;
        font-weight: 400;
      }
    }
  }

  tbody {
    tr {
      td {
        font-size: 0.8rem;
        font-weight: 400;
      }
    }
  }
}
</style>
