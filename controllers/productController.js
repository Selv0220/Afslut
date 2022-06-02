import { ShoppingCartModel } from "../models/shoppingCartModel.js";
import { fetchJsonApi } from "../utils/fetchJsonApi.js";
import { updateList } from "../utils/updateList.js";
import { ShoppingCartView } from "../views/shoppingCartView.js";
import { ShoppingCartController } from "./shoppingCartController.js";

export class ProductController {
    constructor(productModel, productView) {
        this.productModel = productModel;
        this.productView = productView;
        this.categoryFilter = [];

        const shoppingCartCountRoot = document.querySelectorAll(
            ".shoppingCartCount"
        );
        const shoppingCartRoot = document.querySelectorAll(".shoppingCart");

        this.shoppingCartModel = new ShoppingCartModel();
        this.shoppingCartView = new ShoppingCartView(
            null,
            shoppingCartCountRoot,
            shoppingCartRoot
        );
        this.shoppingCartController = new ShoppingCartController(
            this.shoppingCartModel,
            this.shoppingCartView,
            this.productModel.state.products
        );

        const queryParams = new URLSearchParams(window.location.search);
        const parameters = Object.fromEntries(queryParams.entries()).categories;
        const listOfCategories = parameters?.split(",");
        if (listOfCategories?.length > 0) {
            listOfCategories.forEach((categoryItem) =>
                this.categoryFilter.push(categoryItem)
            );
        }

        this.populateCategories(true, () => this.populateProducts(true));
    }

    populateCategories = async (initialLoad, callback) => {
        if (initialLoad) {
            const categories = await fetchJsonApi("/api/getCategories.php");
            this.productModel.setCategories(categories);
        }

        this.productView.renderCategories(
            this.productModel.getCategories(),
            this.categoryFilter
        );

        if (this.categoryFilter?.length > 0) {
            this.productView.displayFilterButton(true);
        }

        this.productView.bindCategoryButton(this.setFilter);
        this.productView.bindResetFilterButton(this.deselectCategories);
        if (callback) {
            callback();
        }
    };

    deselectCategories = () => {
        this.productView.clearCategorySelection();
        this.productView.displayFilterButton(false);
        this.categoryFilter = [];
        this.populateProducts();
    };

    populateProducts = async (initialLoad = false) => {
        if (initialLoad) {
            this.setSpinner(true);
        }
        const fetchtedProducts = await fetchJsonApi(
            `/api/getProducts.php${
                this.categoryFilter?.length > 0
                    ? "?categories=" + this.categoryFilter.join(",")
                    : ""
            }`
        );

        this.productModel.setProducts(fetchtedProducts);
        this.shoppingCartController.setProducts([
            ...this.productModel.state.products,
        ]);
        this.productView.renderProducts(
            [...this.productModel.state.products],
            this.shoppingCartView.generateBuyButton
        );
        this.shoppingCartController.bindBuyButtons();

        if (initialLoad) {
            this.setSpinner(false);
            this.productModel.updateCategoriesCount();
            this.populateCategories();
        }
    };

    setFilter = (filter) => {
        this.categoryFilter = updateList(this.categoryFilter, filter);
        this.productView.displayFilterButton(this.categoryFilter?.length > 0);
        this.populateProducts();
    };

    setSpinner = (show) => {
        const spinner = document.getElementById("productSpinner");

        if (show && !spinner.classList.contains("shown")) {
            spinner.classList.toggle("shown");
            if (spinner.classList.contains("hidden")) {
                spinner.classList.remove("hidden");
            }
        } else if (!show && !spinner.classList.contains("hidden")) {
            spinner.classList.toggle("hidden");
            if (spinner.classList.contains("shown")) {
                spinner.classList.remove("shown");
            }
        }
    };
}