import app from "flarum/admin/app";

app.initializers.add("nearata-password-strength-enforcer", () => {
  app.extensionData.for("nearata-password-strength-enforcer").registerSetting({
    setting: "nearata-password-strength-enforcer.strength",
    type: "select",
    label: app.translator.trans(
      "nearata-password-strength-enforcer.admin.settings.strength.label"
    ),
    help: app.translator.trans(
      "nearata-password-strength-enforcer.admin.settings.strength.help"
    ),
    options: {
      medium: app.translator.trans(
        "nearata-password-strength-enforcer.admin.settings.strength.options.medium"
      ),
      strong: app.translator.trans(
        "nearata-password-strength-enforcer.admin.settings.strength.options.strong"
      ),
    },
    default: "medium",
  });
});
