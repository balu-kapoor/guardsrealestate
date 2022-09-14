function configChangeStage(state) {
    let stage = state.stage
      , form = state.form
      , direction = state.direction;
    let propType = form.property_type;
    let goNext = direction === "next";
    let newStage;
    if (propType && stage === 'building')
        newStage = propType;
    else if (stage === 'house' || stage === 'flat' || stage === 'bungalow')
        newStage = goNext ? 'bedrooms' : 'building';
    else if (propType && stage === 'bedrooms')
        newStage = goNext ? 'postcode' : propType;
    else if (stage === 'postcode')
        newStage = goNext ? 'legal_owner' : 'bedrooms';
    else if (stage === 'legal_owner')
        newStage = goNext ? 'email_address' : 'postcode';
    else if (stage === 'email_address')
        newStage = goNext ? 'name' : 'legal_owner';
    else if (stage === 'name')
        newStage = goNext ? 'phone' : 'email_address';
    else if (stage === 'phone')
        newStage = goNext ? 'situation' : 'name';
    else if (stage === 'situation')
        newStage = goNext ? 'results' : 'phone';
    return newStage;
}
function configGetLevel(stage) {
    return config.levels[stage];
}
function configGetResult(form) {
    return config.results;
}
function getStage(stageName, form) {
    return config.stage[stageName];
}
let config = {
    flow: 'online',
    initial: 'building',
    final: 'situation',
    results: 'results',
    maxLevel: 10,
    levels: {
        'building': 1,
        'house': 2,
        'flat': 2,
        'bungalow': 2,
        'bedrooms': 3,
        'postcode': 4,
        'legal_owner': 5,
        'email_address': 6,
        'name': 7,
        'phone': 8,
        'situation': 9,
        'results': 10
    },
    stage: {
        situation: {
            title: 'What is your situation?',
            body: [{
                type: 'button',
                buttonCount: 3,
                fieldName: 'contact_situation',
                options: [{
                    name: 'Planning to sell',
                    value: 'planning_to_sell'
                }, {
                    name: 'Planning to let',
                    value: 'planning_to_let'
                }, {
                    name: 'Just curious',
                    value: 'just_curious'
                }, {
                    name: 'Ready to sell',
                    value: 'ready_to_sell'
                }, {
                    name: 'Ready to let',
                    value: 'ready_to_let'
                }, ]
            }],
        },
        legal_owner: {
            title: 'Are you the legal owner of the property?',
            body: [{
                type: 'button',
                fieldName: 'legal_owner',
                options: [{
                    name: 'Yes',
                    value: 'yes'
                }, {
                    name: 'No',
                    value: 'no'
                }, ]
            }],
        },
        building: {
            title: 'What type of building is it?',
            subtitle: 'Please select your property type',
            body: [{
                type: 'button',
                fieldName: 'property_type',
                options: [{
                    name: 'House',
                    value: 'house'
                }, {
                    name: 'Flat',
                    value: 'flat'
                }, {
                    name: 'Bungalow',
                    value: 'bungalow'
                }]
            }],
        },
        house: {
            title: 'What kind of house is it?',
            body: [{
                type: 'button',
                fieldName: 'property_sub_type',
                options: [{
                    name: 'Detached',
                    value: 'detached'
                }, {
                    name: 'Semi-detached',
                    value: 'semi_detached'
                }, {
                    name: 'Mid-terrace',
                    value: 'mid_terrace'
                }, {
                    name: 'End-terrace',
                    value: 'end_terrace'
                }]
            }],
        },
        flat: {
            title: 'What kind of flat is it?',
            body: [{
                type: 'button',
                fieldName: 'property_sub_type',
                options: [{
                    name: 'Purpose Build',
                    value: 'purpose_built'
                }, {
                    name: 'Converted',
                    value: 'converted'
                }, ]
            }],
        },
        bungalow: {
            title: 'What kind of bungalow is it?',
            body: [{
                type: 'button',
                fieldName: 'property_sub_type',
                options: [{
                    name: 'Detached',
                    value: 'detached'
                }, {
                    name: 'Semi-detached',
                    value: 'semi_detached'
                }, {
                    name: 'Mid-terrace',
                    value: 'mid_terrace'
                }, {
                    name: 'End-terrace',
                    value: 'end_terrace'
                }]
            }]
        },
        bedrooms: {
            title: 'How many bedrooms does it have?',
            body: [{
                type: 'button',
                fieldName: 'bedrooms',
                options: [{
                    name: '1',
                    value: '1'
                }, {
                    name: '2',
                    value: '2'
                }, {
                    name: '3',
                    value: '3'
                }, {
                    name: '4',
                    value: '4'
                }, {
                    name: '5',
                    value: '5'
                }, {
                    name: '6',
                    value: '6'
                }, {
                    name: '7',
                    value: '7'
                }, {
                    name: '8',
                    value: '8'
                }, {
                    name: '9',
                    value: '9'
                }, {
                    name: '10',
                    value: '10'
                }]
            }]
        },
        postcode: {
            title: 'Please type your postcode below',
            body: [{
                type: 'postcode',
                subtype: 'text',
                fieldName: 'postcode',
                placeholder: 'Enter your postcode',
                validation: {
                    rules: 'required|min:5|max:9',
                    message: 'Please enter a valid postcode'
                }
            }]
        },
        email_address: {
            title: 'What’s the best email address for you?',
            body: [{
                type: 'email',
                subtype: 'email',
                fieldName: 'email',
                placeholder: 'Email',
                validation: {
                    rules: 'required|email',
                    message: 'Please enter a valid email address'
                }
            }, {
                type: 'checkbox',
                subtype: 'checkbox',
                placeholder: "We'd like to follow up with complimentary valuation information such as market trend reports, if you don't wish to receive these emails please tick this box.",
                fieldName: 'optout_to_marketing',
                validation: {
                    rules: 'boolean',
                    message: ''
                }
            }]
        },
        name: {
            title: "Excellent! I'm nearly there.",
            subtitle: 'Can you please tell me your first and last name?',
            body: [{
                type: 'select',
                placeholder: 'Title',
                fieldName: 'title',
                options: [{
                    value: 'Mr'
                }, {
                    value: 'Mrs'
                }, {
                    value: 'Miss'
                }, {
                    value: 'Mx'
                }, {
                    value: 'Ms'
                }],
                validation: {
                    rules: 'required',
                    message: 'Please select title'
                }
            }, {
                type: 'input',
                subtype: 'text',
                placeholder: 'First name',
                fieldName: 'first_name',
                validation: {
                    rules: 'required|min:2',
                    message: 'Please enter your first name'
                }
            }, {
                type: 'input',
                subtype: 'text',
                placeholder: 'Last name',
                fieldName: 'last_name',
                validation: {
                    rules: 'required|min:2',
                    message: 'Please enter your last name'
                }
            }]
        },
        phone: {
            title: "What's the best phone number for you",
            body: [{
                type: 'input',
                subtype: 'tel',
                placeholder: 'Phone number',
                fieldName: 'phone',
                validation: {
                    rules: 'required|phone',
                    message: 'Please enter correct phone number'
                }
            }],
        },
        results: {
            title: "",
            subtitle: '',
            body: [{
                type: 'results',
                fieldName: 'results'
            }]
        }
    }
}
if (!window.FOXTONS)
    window.FOXTONS = {};
if (!window.FOXTONS.config)
    window.FOXTONS.config = {};
window.FOXTONS.config.valuations = {
    config: config,
    configChangeStage: configChangeStage,
    configGetLevel: configGetLevel,
    configGetResult: configGetResult,
    getStage: getStage,
}
