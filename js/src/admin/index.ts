import app from "flarum/admin/app";

app.initializers.add("nearata/flarum-ext-password-strength-enforcer", () => {
  console.log("[nearata/flarum-ext-password-strength-enforcer] Hello, admin!");
});
