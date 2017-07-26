export class AutoComplete {
  constructor () {
    this.initAutoComplete()
  }

  getData () {
    return [
      'ActionScript',
      'AppleScript',
      'Asp',
      'BASIC',
      'C',
      'C++',
      'Clojure',
      'COBOL',
      'ColdFusion',
      'Erlang',
      'Fortran',
      'Groovy',
      'Haskell',
      'Java',
      'JavaScript',
      'Lisp',
      'Perl',
      'PHP',
      'Python',
      'Ruby',
      'Scala',
      'Scheme'
    ]
  }

  initAutoComplete () {
    $('#autocomplete-example').autocomplete({
      source: this.getData()
    })
  }
}

window.autoComplete = new AutoComplete()
