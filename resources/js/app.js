import "bootstrap-icons/font/bootstrap-icons.min.css";
import Turbolinks from "turbolinks";
import "./bootstrap";
import { ago } from "./lib";

Turbolinks.start();

const onActiveResponsiveTable = () => {
    document.querySelectorAll(".responsive-table").forEach((table) => {
        const labels = Array.from(table.querySelectorAll("th")).map(
            (th) => th.innerText
        );
        table.querySelectorAll("td").forEach((td, index) => {
            td.setAttribute("data-label", labels[index % labels.length]);
        });
    });
};

const onNowDate = () => {
    document.querySelectorAll("div#date-ago").forEach((d) => {
        const now = d.hasAttribute("now") ? d.getAttribute("now") : new Date();
        d.innerHTML = ago(now);
    });
};

const onRemoveFlashMessage = () => {
    const flash = document.querySelector("#flash-message");
    if (flash) {
        window.setTimeout(() => flash.remove(), 4000);
    }
};

const init = () => {
    onActiveResponsiveTable();
    onNowDate();
    onRemoveFlashMessage();
};

document.addEventListener("DOMContentLoaded", init);

document.addEventListener("turbolinks:render", init);
