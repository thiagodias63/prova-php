module.exports = {
    devServer: { port: 4000 },
    configureWebpack: {
      devServer: {
          watchOptions: {
              poll: true
          }
      }
    },
    css: {
        loaderOptions: {
          sass: {
            prependData: `@import "./sass/imports.scss";`
          }
        }
      }
    }