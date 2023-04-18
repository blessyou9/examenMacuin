notie.confirm({
    text: 'Is ES6 great?',
    cancelCallback: () => notie.alert({ type: 3, text: 'Why not?' }),
    submitCallback: () => notie.alert({ type: 1, text: 'I Agree' })
  })
