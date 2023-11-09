module.exports = {
  extends: ['@roots/bud-sass/config/stylelint'],
  rules: {
    'import-notation': null,
    'no-empty-source': null,
    'at-rule-no-unknown': null,
    'at-rule-empty-line-before' : null,
    'color-no-invalid-hex': true,
    'comment-no-empty': true,
    'declaration-block-no-duplicate-properties': true,
    'declaration-block-no-shorthand-property-overrides': true,
    'declaration-block-no-redundant-longhand-properties': null,
    'font-family-no-duplicate-names': true,
    'function-calc-no-unspaced-operator': true,
    'function-linear-gradient-no-nonstandard-direction': true,
    'keyframe-declaration-no-important': true,
    'media-feature-name-no-unknown': true,
    'no-duplicate-at-import-rules': true,
    'no-duplicate-selectors': true,
    'no-empty-source': null,
    'no-invalid-double-slash-comments': [],
    'no-descending-specificity': null,
    'property-no-unknown': true,
    'scss/at-rule-no-unknown': true,
    'scss/at-function-pattern': null,
    'scss/at-mixin-pattern': null,
    'scss/dollar-variable-empty-line-before': null,
    'scss/comment-no-empty': null,
    'scss/double-slash-comment-whitespace-inside': null,
    'scss/dollar-variable-pattern': null,
    'selector-class-pattern': null,
    'selector-pseudo-class-no-unknown': true,
    'selector-pseudo-element-no-unknown': true,
    'selector-type-no-unknown': true,
    'string-no-newline': true,
    'unit-no-unknown': true
  },
};
