module.exports = {
  chainWebpack: config => {
    config.plugins.delete("progress");
    config
      .plugin("simple-progress-webpack-plugin")
      .use(require.resolve("simple-progress-webpack-plugin"), [
        {
          format: "compact"
        }
      ]);
  }
};
