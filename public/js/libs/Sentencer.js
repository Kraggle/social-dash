import K from '../src/K.js';

// ---------------------------------------------
//                NOUN INFLECTOR
// ---------------------------------------------

function inherits(ctor, superCtor) {
	if (superCtor) {
		ctor.super_ = superCtor
		ctor.prototype = Object.create(superCtor.prototype, {
			constructor: {
				value: ctor,
				enumerable: false,
				writable: true,
				configurable: true
			}
		})
	}
}

const FormSet = function() {
	this.regularForms = [];
	this.irregularForms = {};
}

const SingularPluralInflector = function() {/*  */ };

SingularPluralInflector.prototype.addSingular = function(pattern, replacement) {
	this.customSingularForms.push([pattern, replacement]);
};

SingularPluralInflector.prototype.addPlural = function(pattern, replacement) {
	this.customPluralForms.push([pattern, replacement]);
};

SingularPluralInflector.prototype.ize = function(token, formSet, customForms) {
	var restoreCase = this.restoreCase(token);
	return restoreCase(this.izeRegExps(token, customForms) || this.izeAbiguous(token) ||
		this.izeRegulars(token, formSet) || this.izeRegExps(token, formSet.regularForms) ||
		token);
}

SingularPluralInflector.prototype.izeAbiguous = function(token) {
	if (this.ambiguous.indexOf(token.toLowerCase()) > -1)
		return token.toLowerCase();

	return false;
}

SingularPluralInflector.prototype.pluralize = function(token) {
	return this.ize(token, this.pluralForms, this.customPluralForms);
};

SingularPluralInflector.prototype.singularize = function(token) {
	return this.ize(token, this.singularForms, this.customSingularForms);
};

const uppercaseify = function(token) {
	return token.toUpperCase();
}
const capitalize = function(token) {
	return token[0].toUpperCase() + token.slice(1);
}
const lowercaseify = function(token) {
	return token.toLowerCase();
}

SingularPluralInflector.prototype.restoreCase = function(token) {
	if (token[0] === token[0].toUpperCase()) {
		if (token[1] && token[1] === token[1].toLowerCase()) {
			return capitalize;
		} else {
			return uppercaseify;
		}
	} else {
		return lowercaseify;
	}
}

SingularPluralInflector.prototype.izeRegulars = function(token, formSet) {
	token = token.toLowerCase();
	if (formSet.irregularForms.hasOwnProperty(token) && formSet.irregularForms[token])
		return formSet.irregularForms[token];

	return false;
}

SingularPluralInflector.prototype.addForm = function(singularTable, pluralTable, singular, plural) {
	singular = singular.toLowerCase();
	plural = plural.toLowerCase();
	pluralTable[singular] = plural;
	singularTable[plural] = singular;
};

SingularPluralInflector.prototype.addIrregular = function(singular, plural) {
	this.addForm(this.singularForms.irregularForms, this.pluralForms.irregularForms, singular, plural);
};

SingularPluralInflector.prototype.izeRegExps = function(token, forms) {
	var i, form;
	for (i = 0; i < forms.length; i++) {
		form = forms[i];

		if (token.match(form[0]))
			return token.replace(form[0], form[1]);
	}

	return false;
}


function attach() {
	const inflector = this;

	String.prototype.singularizeNoun = function() {
		return inflector.singularize(this);
	}

	String.prototype.pluralizeNoun = function() {
		return inflector.pluralize(this);
	}
}

const NounInflector = function() {
	this.ambiguous = [
		'bison', 'bream', 'carp', 'chassis', 'cod', 'corps', 'debris', 'deer',
		'diabetes', 'equipment', 'elk', 'fish', 'flounder', 'gallows', 'graffiti',
		'headquarters', 'herpes', 'highjinks', 'homework', 'information',
		'mackerel', 'mews', 'money', 'news', 'rice', 'rabies', 'salmon', 'series',
		'sheep', 'shrimp', 'species', 'swine', 'trout', 'tuna', 'whiting', 'wildebeest'
	];

	this.customPluralForms = [];
	this.customSingularForms = [];
	this.singularForms = new FormSet();
	this.pluralForms = new FormSet();

	this.attach = attach;

	this.addIrregular("child", "children");
	this.addIrregular("man", "men");
	this.addIrregular("person", "people");
	this.addIrregular("sex", "sexes");
	this.addIrregular("mouse", "mice");
	this.addIrregular("ox", "oxen");
	this.addIrregular("foot", "feet");
	this.addIrregular("tooth", "teeth");
	this.addIrregular("goose", "geese");
	this.addIrregular("ephemeris", "ephemerides");

	// see if it is possible to unify the creation of both the singular and
	// plural regexes or maybe even just have one list. with a complete list
	// of rules it may only be possible for some regular forms, but worth a shot    
	this.pluralForms.regularForms.push([/y$/i, 'ies']);
	this.pluralForms.regularForms.push([/ife$/i, 'ives']);
	this.pluralForms.regularForms.push([/(antenn|formul|nebul|vertebr|vit)a$/i, '$1ae']);
	this.pluralForms.regularForms.push([/(octop|vir|radi|nucle|fung|cact|stimul)us$/i, '$1i']);
	this.pluralForms.regularForms.push([/(buffal|tomat|tornad)o$/i, '$1oes']);
	this.pluralForms.regularForms.push([/(sis)$/i, 'ses']);
	this.pluralForms.regularForms.push([/(matr|vert|ind|cort)(ix|ex)$/i, '$1ices']);
	this.pluralForms.regularForms.push([/(x|ch|ss|sh|s|z)$/i, '$1es']);
	this.pluralForms.regularForms.push([/^(?!talis|.*hu)(.*)man$/i, '$1men']);
	this.pluralForms.regularForms.push([/(.*)/i, '$1s']);

	this.singularForms.regularForms.push([/([^v])ies$/i, '$1y']);
	this.singularForms.regularForms.push([/ives$/i, 'ife']);
	this.singularForms.regularForms.push([/(antenn|formul|nebul|vertebr|vit)ae$/i, '$1a']);
	this.singularForms.regularForms.push([/(octop|vir|radi|nucle|fung|cact|stimul)(i)$/i, '$1us']);
	this.singularForms.regularForms.push([/(buffal|tomat|tornad)(oes)$/i, '$1o']);
	this.singularForms.regularForms.push([/(analy|naly|synop|parenthe|diagno|the)ses$/i, '$1sis']);
	this.singularForms.regularForms.push([/(vert|ind|cort)(ices)$/i, '$1ex']);
	// our pluralizer won''t cause this form of appendix (appendicies)
	// but we should handle it
	this.singularForms.regularForms.push([/(matr|append)(ices)$/i, '$1ix']);
	this.singularForms.regularForms.push([/(x|ch|ss|sh|s|z)es$/i, '$1']);
	this.singularForms.regularForms.push([/men$/i, 'man']);
	this.singularForms.regularForms.push([/s$/i, '']);

	this.pluralize = function(token) {
		return this.ize(token, this.pluralForms, this.customPluralForms);
	};

	this.singularize = function(token) {
		return this.ize(token, this.singularForms, this.customSingularForms);
	};
};

inherits(NounInflector, SingularPluralInflector);

const nounInflector = new NounInflector();

// ---------------------------------------------
//                 ARTICLIZE
// ---------------------------------------------

const Articlize = function() {
	var input, inputs, out;
	inputs = 1 <= arguments.length ? slice.call(arguments, 0) : [];
	out = (function() {
		var i, len, results;
		results = [];
		for (i = 0, len = inputs.length; i < len; i++) {
			input = inputs[i];
			if (input != null) {
				results.push((find(input)) + " " + input);
			}
		}
		return results;
	})();
	if (inputs.length === 1) {
		return out[0];
	} else {
		return out;
	}
};

import adverbs from './words/adverbs.js';
import adjectives from './words/adjectives.js';
import nouns from './words/nouns.js';

// ---------------------------------------------
//                  DEFAULTS
// ---------------------------------------------

function Sentencer() {
	const self = this;

	self._nouns = nouns;
	self._adjectives = adjectives;
	self._adverbs = adverbs;

	self.actions = {
		noun: function() {
			return K.choice(self._nouns);
		},
		a_noun: function() {
			return Articlize(self.actions.noun());
		},
		nouns: function() {
			return nounInflector.pluralize(K.choice(self._nouns));
		},
		adjective: function() {
			return K.choice(self._adjectives);
		},
		an_adjective: function() {
			return Articlize(self.actions.adjective());
		},
		adverb: function() {
			return K.choice(self._adverbs);
		}
	};

	self.configure = function(options) {
		// merge actions
		K.extend(self.actions, options.actions || {});
		// overwrite nouns and adjectives if we got some
		self._nouns = options.nounList || self._nouns;
		self._adjectives = options.adjectiveList || self._adjectives;
	};

	self.use = function(options) {
		const newInstance = new Sentencer();
		newInstance.configure(options);
		return newInstance;
	};
}

// ---------------------------------------------
//                  THE GOODS
// ---------------------------------------------

Sentencer.prototype.make = function(template) {
	const self = this;

	let sentence = template;
	const occurrences = template.match(/\{\{(.+?)\}\}/g);

	if (occurrences && occurrences.length) {
		for (const occurrence of occurrences) {
			const action = occurrence.replace('{{', '').replace('}}', '').trim();
			let result = '';
			const actionIsFunctionCall = action.match(/^\w+\((.+?)\)$/);

			if (actionIsFunctionCall) {
				const actionNameWithParens = action.match(/^(\w+)\(/),
					actionName = actionNameWithParens[1],
					actionExists = self.actions[actionName];
				let actionContents = action.match(/\((.+?)\)/);
				actionContents = actionContents && actionContents[1];

				if (actionExists && actionContents) {
					try {
						const args = _.map(actionContents.split(','), maybeCastToNumber);
						result = self.actions[actionName].apply(null, args);
					}
					catch (e) { }
				}
			} else {
				if (self.actions[action]) {
					result = self.actions[action]();
				} else {
					result = '{{ ' + action + ' }}';
				}
			}
			sentence = sentence.replace(occurrence, result);
		}
	}
	return sentence;
};

function maybeCastToNumber(input) {
	const trimmedInput = input.trim();
	return !Number.isNaN(Number(trimmedInput)) ? Number(trimmedInput) : trimmedInput;
}

// ---------------------------------------------
//                    DONE
// ---------------------------------------------

export default new Sentencer();
