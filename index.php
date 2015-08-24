<?php

/**
 * var json = {};
 * for(var i in json) {
 * var name = i;
 * var abtest = json[i];
 *
 * for(var w in abtest.weights) {
 * var weightName = w;
 * var weight = abtest.weights[w]
 * // Handle Weight
 * }
 * for(var s in abtest.segments) {
 * var segmentName = w;
 * var segment = abtest.segments[w]
 * // Handle segment
 * }
 *
 *
 *
 * }
 */

$tests = array(
		'email.value-assessment' => array(
			'weights' => array(
				'test3-a' => 20,
				'test3-b' => 80,
			),
			'segments' => array(
				'control' => array(
					'lifecycle' => 'no',
					'triggered' => 'no',
					'newsletter' => 'no',
				),
				'test-a' => array(
					'lifecycle' => 'yes',
					'triggered' => 'yes',
					'newsletter' => 'yes',
				),
				'test-b' => array(
					'lifecycle' => 'yes',
					'triggered' => 'no',
					'newsletter' => 'yes',
				),
				'test-c' => array(
					'lifecycle' => 'no',
					'triggered' => 'yes',
					'newsletter' => 'yes',
				),
				// restart --------------
				'control2' => array(
					'lifecycle' => 'no',
					'triggered' => 'no',
					'newsletter' => 'no',
				),
				'test2-a' => array(
					'lifecycle' => 'yes',
					'triggered' => 'yes',
					'newsletter' => 'yes',
				),
				'test2-b' => array(
					'lifecycle' => 'yes',
					'triggered' => 'no',
					'newsletter' => 'yes',
				),
				'test2-c' => array(
					'lifecycle' => 'no',
					'triggered' => 'yes',
					'newsletter' => 'yes',
				),
				// ----------------------
				'test3-a' => array(
					'lifecycle' => 'yes',
					'triggered' => 'yes',
					'newsletter' => 'yes',
				),
				'test3-b' => array(
					'lifecycle' => 'yes',
					'triggered' => 'no',
					'newsletter' => 'yes',
				),
			),
		),
		'design.homepage.project-x' => array(
			'weights' => array(
				'final' => 100,
			),
			'segments' => array(
				'control' => array(
					'design' => "old",
				),
				'control2' => array(
					'design' => "old",
				),
				'control3' => array(
					'design' => "old",
				),
				'final' => array(
					'design' => "new",
				),
				'media' => array(
					'design' => "new",
				),
				'media3' => array(
					'design' => "new",
				),
				'test' => array(
					'design' => "new",
				),
				'test2' => array(
					'design' => "new",
				),
				'test3' => array(
					'design' => "new",
				),
				'ux-control' => array(
					'design' => "old",
				),
			),
		),
		'Designer.goLivePrices' => array(
			'weights' => array(
				'first' => 50,
				'second' => 50,
			),
			'segments' => array(
				'first' => array(
					'Advanced' => "29",
					'Basic' => "9",
					'Plus' => "19",
					'Unlimited' => "49",
				),
				'second' => array(
					'Advanced' => "49",
					'Basic' => "19",
					'Plus' => "29",
					'Unlimited' => "69",
				),
			),
		),
		'site-page-limits' => array(
			'weights' => array(
				'control' => 100,
				'variable' => 0
			),
			'segments' => array(
				'control' => array(
					'sitePageLimits' => "no",
				),
				'forcedcontrol' => array(
					'sitePageLimits' => "no",
				),
				'variable' => array(
					'sitePageLimits' => "yes",
				)
			),
		),
		// Named poorly. moreStarterOptions = "yes" actually has less starter
		// options, and thus variable is actually the control. :/
		'starter-pro-comparison' => array(
			'weights' => array(
				'control' => 0,
				'variable' => 100
			),
			'segments' => array(
				'control' => array(
					'moreStarterOptions' => "yes",
				),
				'variable' => array(
					'moreStarterOptions' => "no",
				)
			),
		),
		'multiple-billing-plans' => array(
			'weights' => array(
				'final' => 100,
			),
			'segments' => array(
				'control' => array(
					'scope' => "account",
				),
				'final' => array(
					'scope' => "site",
				),
				'test' => array(
					'scope' => "site",
				),
			),
		),
		'RCOM.customSite' => array(
			'weights' => array(
				'normal' => 100,
			),
			'segments' => array(
				'normal' => array(
					'service_id' => "Rcom.customWebsite5-a",
				),
			),
		),
		'Sandbox.versions' => array(
			'weights' => array(
				'control' => 50,
				'test' => 50,
			),
			'segments' => array(
				'control' => array(
					'method' => "stay the same",
				),
				'test' => array(
					'method' => "do it different",
				),
				'test2' => array(
					'method' => "do it some other way",
				),
			),
		),
		'Test.test1' => array(
			'weights' => array(
				'high' => 33,
				'low' => 33,
				'medium' => 33,
			),
			'segments' => array(
				'high' => array(
					'price' => "30",
				),
				'low' => array(
					'price' => "10",
				),
				'medium' => array(
					'price' => "20",
				),
			),
		),
		'Weebly.billing.domain.early-renewal' => array(
			'weights' => array(
				'final' => 100,
			),
			'segments' => array(
				'control' => array(
					'use coupon' => "yes",
				),
				'final' => array(
					'use coupon' => "no",
				),
				'test' => array(
					'use coupon' => "no",
				),
			),
		),
		'Weebly.campaign.adsense1' => array(
			'weights' => array(
				'noprompt' => 50,
				'upgradeprompt' => 50,
			),
			'segments' => array(
				'noprompt' => array(
					'upgradePrompt' => "0",
				),
				'upgradeprompt' => array(
					'upgradePrompt' => "1",
				),
			),
		),
		'Weebly.campaign.test' => array(
			'weights' => array(
				'noprompt' => 50,
				'upgradeprompt' => 50,
			),
			'segments' => array(
				'noprompt' => array(
					'upgradePrompt' => "0",
				),
				'upgradeprompt' => array(
					'upgradePrompt' => "1",
				),
			),
		),
		'Weebly.domainPrices.test1' => array(
			'weights' => array(
				'g-high' => 100,
			),
			'segments' => array(
				'b-high' => array(
					'customDomain12' => "Weebly.customDomain12-d",
					'customDomain120' => "Weebly.customDomain120-d",
					'customDomain24' => "Weebly.customDomain24-d",
					'customDomain60' => "Weebly.customDomain60-d",
					'customDomainWhois12' => "Weebly.customDomainWhois12-d",
					'customDomainWhois120' => "Weebly.customDomainWhois120-d",
					'customDomainWhois24' => "Weebly.customDomainWhois24-d",
					'customDomainWhois60' => "Weebly.customDomainWhois60-d",
				),
				'b-low' => array(
					'customDomain12' => "Weebly.customDomain12-b",
					'customDomain120' => "Weebly.customDomain120-b",
					'customDomain24' => "Weebly.customDomain24-b",
					'customDomain60' => "Weebly.customDomain60-b",
					'customDomainWhois12' => "Weebly.customDomainWhois12-b",
					'customDomainWhois120' => "Weebly.customDomainWhois120-b",
					'customDomainWhois24' => "Weebly.customDomainWhois24-b",
					'customDomainWhois60' => "Weebly.customDomainWhois60-b",
				),
				'b-medium' => array(
					'customDomain12' => "Weebly.customDomain12-c",
					'customDomain120' => "Weebly.customDomain120-c",
					'customDomain24' => "Weebly.customDomain24-c",
					'customDomain60' => "Weebly.customDomain60-c",
					'customDomainWhois12' => "Weebly.customDomainWhois12-c",
					'customDomainWhois120' => "Weebly.customDomainWhois120-c",
					'customDomainWhois24' => "Weebly.customDomainWhois24-c",
					'customDomainWhois60' => "Weebly.customDomainWhois60-c",
				),
				'c-high' => array(
					'customDomain12' => "Weebly.customDomain12-d",
					'customDomain120' => "Weebly.customDomain120-d",
					'customDomain24' => "Weebly.customDomain24-d",
					'customDomain60' => "Weebly.customDomain60-d",
					'customDomainWhois12' => "Weebly.customDomainWhois12-d",
					'customDomainWhois120' => "Weebly.customDomainWhois120-d",
					'customDomainWhois24' => "Weebly.customDomainWhois24-d",
					'customDomainWhois60' => "Weebly.customDomainWhois60-d",
				),
				'c-veryhigh' => array(
					'customDomain12' => "Weebly.customDomain12-e",
					'customDomain120' => "Weebly.customDomain120-e",
					'customDomain24' => "Weebly.customDomain24-e",
					'customDomain60' => "Weebly.customDomain60-e",
					'customDomainWhois12' => "Weebly.customDomainWhois12-e",
					'customDomainWhois120' => "Weebly.customDomainWhois120-e",
					'customDomainWhois24' => "Weebly.customDomainWhois24-e",
					'customDomainWhois60' => "Weebly.customDomainWhois60-e",
				),
				'cost' => array(
					'customDomain12' => "Weebly.customDomain12-cost",
					'customDomain120' => "Weebly.customDomain120-cost",
					'customDomain24' => "Weebly.customDomain24-cost",
					'customDomain60' => "Weebly.customDomain60-cost",
					'customDomainWhois12' => "Weebly.customDomainWhois12-cost",
					'customDomainWhois120' => "Weebly.customDomainWhois120-cost",
					'customDomainWhois24' => "Weebly.customDomainWhois24-cost",
					'customDomainWhois60' => "Weebly.customDomainWhois60-cost",
				),
				'current' => array(
					'customDomain12' => "Weebly.customDomain12",
					'customDomain120' => "Weebly.customDomain120",
					'customDomain24' => "Weebly.customDomain24",
					'customDomain60' => "Weebly.customDomain60",
					'customDomainWhois12' => "Weebly.customDomainWhois12",
					'customDomainWhois120' => "Weebly.customDomainWhois120",
					'customDomainWhois24' => "Weebly.customDomainWhois24",
					'customDomainWhois60' => "Weebly.customDomainWhois60",
				),
				'd-high' => array(
					'customDomain12' => "Weebly.customDomain12-d",
					'customDomain120' => "Weebly.customDomain120-d",
					'customDomain24' => "Weebly.customDomain24-d",
					'customDomain60' => "Weebly.customDomain60-d",
					'customDomainWhois12' => "Weebly.customDomainWhois12-d",
					'customDomainWhois120' => "Weebly.customDomainWhois120-d",
					'customDomainWhois24' => "Weebly.customDomainWhois24-d",
					'customDomainWhois60' => "Weebly.customDomainWhois60-d",
				),
				'e-high' => array(
					'customDomain12' => "Weebly.customDomain12-d",
					'customDomain120' => "Weebly.customDomain120-d",
					'customDomain24' => "Weebly.customDomain24-d",
					'customDomain60' => "Weebly.customDomain60-d",
					'customDomainWhois12' => "Weebly.customDomainWhois12-d",
					'customDomainWhois120' => "Weebly.customDomainWhois120-d",
					'customDomainWhois24' => "Weebly.customDomainWhois24-d",
					'customDomainWhois60' => "Weebly.customDomainWhois60-d",
				),
				'e-middle' => array(
					'customDomain12' => "Weebly.customDomain12-f",
					'customDomain120' => "Weebly.customDomain120-f",
					'customDomain24' => "Weebly.customDomain24-f",
					'customDomain60' => "Weebly.customDomain60-f",
					'customDomainWhois12' => "Weebly.customDomainWhois12-f",
					'customDomainWhois120' => "Weebly.customDomainWhois120-f",
					'customDomainWhois24' => "Weebly.customDomainWhois24-f",
					'customDomainWhois60' => "Weebly.customDomainWhois60-f",
				),
				'f-high' => array(
					'customDomain12' => "Weebly.customDomain12-d",
					'customDomain120' => "Weebly.customDomain120-d",
					'customDomain24' => "Weebly.customDomain24-d",
					'customDomain60' => "Weebly.customDomain60-d",
					'customDomainWhois12' => "Weebly.customDomainWhois12-d",
					'customDomainWhois120' => "Weebly.customDomainWhois120-d",
					'customDomainWhois24' => "Weebly.customDomainWhois24-d",
					'customDomainWhois60' => "Weebly.customDomainWhois60-d",
				),
				'g-high' => array(
					'customDomain12' => "Weebly.customDomain12-d",
					'customDomain120' => "Weebly.customDomain120-d",
					'customDomain24' => "Weebly.customDomain24-d",
					'customDomain60' => "Weebly.customDomain60-d",
					'customDomainWhois12' => "Weebly.customDomainWhois12-d",
					'customDomainWhois120' => "Weebly.customDomainWhois120-d",
					'customDomainWhois24' => "Weebly.customDomainWhois24-d",
					'customDomainWhois60' => "Weebly.customDomainWhois60-d",
				),
				'g-middle' => array(
					'customDomain12' => "Weebly.customDomain12-f",
					'customDomain120' => "Weebly.customDomain120-f",
					'customDomain24' => "Weebly.customDomain24-f",
					'customDomain60' => "Weebly.customDomain60-f",
					'customDomainWhois12' => "Weebly.customDomainWhois12-f",
					'customDomainWhois120' => "Weebly.customDomainWhois120-f",
					'customDomainWhois24' => "Weebly.customDomainWhois24-f",
					'customDomainWhois60' => "Weebly.customDomainWhois60-f",
				),
				'high' => array(
					'customDomain12' => "Weebly.customDomain12-c",
					'customDomain120' => "Weebly.customDomain120-c",
					'customDomain24' => "Weebly.customDomain24-c",
					'customDomain60' => "Weebly.customDomain60-c",
					'customDomainWhois12' => "Weebly.customDomainWhois12-c",
					'customDomainWhois120' => "Weebly.customDomainWhois120-c",
					'customDomainWhois24' => "Weebly.customDomainWhois24-c",
					'customDomainWhois60' => "Weebly.customDomainWhois60-c",
				),
				'high2' => array(
					'customDomain12' => "Weebly.customDomain12-c",
					'customDomain120' => "Weebly.customDomain120-c",
					'customDomain24' => "Weebly.customDomain24-c",
					'customDomain60' => "Weebly.customDomain60-c",
					'customDomainWhois12' => "Weebly.customDomainWhois12-c",
					'customDomainWhois120' => "Weebly.customDomainWhois120-c",
					'customDomainWhois24' => "Weebly.customDomainWhois24-c",
					'customDomainWhois60' => "Weebly.customDomainWhois60-c",
				),
				'low' => array(
					'customDomain12' => "Weebly.customDomain12-b",
					'customDomain120' => "Weebly.customDomain120-b",
					'customDomain24' => "Weebly.customDomain24-b",
					'customDomain60' => "Weebly.customDomain60-b",
					'customDomainWhois12' => "Weebly.customDomainWhois12-b",
					'customDomainWhois120' => "Weebly.customDomainWhois120-b",
					'customDomainWhois24' => "Weebly.customDomainWhois24-b",
					'customDomainWhois60' => "Weebly.customDomainWhois60-b",
				),
				'veryhigh' => array(
					'customDomain12' => "Weebly.customDomain12-d",
					'customDomain120' => "Weebly.customDomain120-d",
					'customDomain24' => "Weebly.customDomain24-d",
					'customDomain60' => "Weebly.customDomain60-d",
					'customDomainWhois12' => "Weebly.customDomainWhois12-d",
					'customDomainWhois120' => "Weebly.customDomainWhois120-d",
					'customDomainWhois24' => "Weebly.customDomainWhois24-d",
					'customDomainWhois60' => "Weebly.customDomainWhois60-d",
				),
				'veryhigh2' => array(
					'customDomain12' => "Weebly.customDomain12-d",
					'customDomain120' => "Weebly.customDomain120-d",
					'customDomain24' => "Weebly.customDomain24-d",
					'customDomain60' => "Weebly.customDomain60-d",
					'customDomainWhois12' => "Weebly.customDomainWhois12-d",
					'customDomainWhois120' => "Weebly.customDomainWhois120-d",
					'customDomainWhois24' => "Weebly.customDomainWhois24-d",
					'customDomainWhois60' => "Weebly.customDomainWhois60-d",
				),
				// Domains for the bundles test
				'bundle-manual' => array(
					'customDomain12' => "Weebly.customDomain12-bundle",
					'customDomain120' => "Weebly.customDomain120-bundle",
					'customDomain24' => "Weebly.customDomain24-bundle",
					'customDomain60' => "Weebly.customDomain60-bundle",
					'customDomainWhois12' => "Weebly.customDomainWhois12-bundle",
					'customDomainWhois120' => "Weebly.customDomainWhois120-bundle",
					'customDomainWhois24' => "Weebly.customDomainWhois24-bundle",
					'customDomainWhois60' => "Weebly.customDomainWhois60-bundle",
				),
			),
		),
		'Weebly.email.announcement.2012-12.subject' => array(
			'weights' => array(
				'long2' => 50,
				'short2' => 50,
			),
			'segments' => array(
				'long' => array(
					'email_suffix' => "sub-a",
				),
				'long2' => array(
					'email_suffix' => "sub-a",
				),
				'medium' => array(
					'email_suffix' => "sub-b",
				),
				'new' => array(
					'email_suffix' => "sub-d",
				),
				'short' => array(
					'email_suffix' => "sub-c",
				),
				'short2' => array(
					'email_suffix' => "sub-c",
				),
			),
		),
		'Weebly.email.userbase.subject.2012-12' => array(
			'weights' => array(
				'long' => 50,
				'short' => 50,
			),
			'segments' => array(
				'long' => array(
					'email_suffix' => "sub-a",
				),
				'short' => array(
					'email_suffix' => "sub-c",
				),
			),
		),
		'Weebly.facebook.signup' => array(
			'weights' => array(
				'allowed' => 50,
				'not_allowed' => 50,
			),
			'segments' => array(
				'allowed' => array(
					'show_signup' => "1",
				),
				'not_allowed' => array(
					'show_signup' => "0",
				),
			),
		),
		'Weebly.footerInspiration' => array(
			'weights' => array(
				'control' => 50,
				'test' => 50,
			),
			'segments' => array(
				'control' => array(
					'show' => "0",
				),
				'test' => array(
					'show' => "1",
				),
			),
		),
		'Weebly.lifecycle.personal-touch' => array(
			'weights' => array(
				'control' => 50,
				'test' => 50,
			),
			'segments' => array(
				'control' => array(
					'deliver' => "false",
				),
				'test' => array(
					'deliver' => "true",
				),
			),
		),
		'Weebly.lifecycleCoupon' => array(
			'weights' => array(
				'20' => 25,
				'25' => 25,
				'33' => 25,
				'40' => 25,
			),
			'segments' => array(
				'20' => array(
					'discount' => "20",
				),
				'25' => array(
					'discount' => "25",
				),
				'33' => array(
					'discount' => "33",
				),
				'40' => array(
					'discount' => "40",
				),
			),
		),
		'Weebly.moneyback' => array(
			'weights' => array(
				'no_guarantee' => 50,
				'quarantee' => 50,
			),
			'segments' => array(
				'no_guarantee' => array(
					'showGuarantee' => "hide",
				),
				'quarantee' => array(
					'showGuarantee' => "show",
				),
			),
		),
		'Weebly.monthlyPro' => array(
			'weights' => array(
				'allowed' => 5,
				'notAllowed' => 95,
			),
			'segments' => array(
				'allowed' => array(
					'showOption' => "yes",
				),
				'notAllowed' => array(
					'showOption' => "no",
				),
			),
		),
		'Weebly.MyDomainsTab' => array(
			'weights' => array(
				'disabled' => 50,
				'enabled' => 50,
			),
			'segments' => array(
				'disabled' => array(
					'status' => "0",
				),
				'enabled' => array(
					'status' => "1",
				),
			),
		),
		'Weebly.newHomepage' => array(
			'weights' => array(
				'new' => 100,
			),
			'segments' => array(
				'new' => array(
					'version' => "new",
				),
			),
		),
		'Weebly.newHomepage.signupBtn' => array(
			'weights' => array(
				'free' => 50,
				'startsite' => 50,
			),
			'segments' => array(
				'extended' => array(
					'version' => "",
				),
				'free' => array(
					'version' => "",
				),
				'short' => array(
					'version' => "2",
				),
				'startsite' => array(
					'version' => "3",
				),
			),
		),
		'Weebly.popUpBilling' => array(
			'weights' => array(
				'popup' => 100,
			),
			'segments' => array(
				'popup' => array(
					'popUpWindow' => "true",
				),
			),
		),
		'Weebly.proPrices.default' => array(
			'weights' => array(
				'1-year' => 33,
				'2-year' => 33,
				'6-month' => 33,
			),
			'segments' => array(
				'1-year' => array(
					'default' => "12",
				),
				'2-year' => array(
					'default' => "24",
				),
				'6-month' => array(
					'default' => "6",
				),
			),
		),
		'Weebly.proPrices.paypalTest' => array(
			'weights' => array(
				'paypaloff' => 50,
				'paypalon' => 50,
			),
			'segments' => array(
				'paypaloff' => array(
					'enabled' => "false",
				),
				'paypalon' => array(
					'enabled' => "true",
				),
			),
		),
		'Weebly.proPrices.popUp1' => array(
			'weights' => array(
				'iframe' => 50,
				'popup' => 50,
			),
			'segments' => array(
				'iframe' => array(
					'popUpWindow' => "false",
				),
				'popup' => array(
					'popUpWindow' => "true",
				),
			),
		),
		'Weebly.proPrices.test1' => array(
			'weights' => array(
				'low-finished' => 100,
			),
			'segments' => array(
				'current' => array(
					'proAccount12' => "Weebly.proAccount12",
					'proAccount24' => "Weebly.proAccount24",
					'proAccount6' => "Weebly.proAccount6",
				),
				'high' => array(
					'proAccount12' => "Weebly.proAccount12-c",
					'proAccount24' => "Weebly.proAccount24-c",
					'proAccount6' => "Weebly.proAccount6-c",
				),
				'low' => array(
					'proAccount12' => "Weebly.proAccount12-b",
					'proAccount24' => "Weebly.proAccount24-b",
					'proAccount6' => "Weebly.proAccount6-b",
				),
				'low-finished' => array(
					'proAccount12' => "Weebly.proAccount12-b",
					'proAccount24' => "Weebly.proAccount24-b",
					'proAccount6' => "Weebly.proAccount6-b",
				),
				'low2' => array(
					'proAccount12' => "Weebly.proAccount12-b",
					'proAccount24' => "Weebly.proAccount24-b",
					'proAccount6' => "Weebly.proAccount6-b",
				),
				'verylow' => array(
					'proAccount12' => "Weebly.proAccount12-a",
					'proAccount24' => "Weebly.proAccount24-a",
					'proAccount6' => "Weebly.proAccount6-a",
				),
			),
		),
		'Weebly.proPrices.test2' => array(
			'weights' => array(
				'higher6-final' => 100,
			),
			'segments' => array(
				'higher-12' => array(
					'proAccount12' => "Weebly.proAccount12-b2",
					'proAccount24' => "Weebly.proAccount24-b",
					'proAccount6' => "Weebly.proAccount6-b",
				),
				'higher-6' => array(
					'proAccount12' => "Weebly.proAccount12-b",
					'proAccount24' => "Weebly.proAccount24-b",
					'proAccount6' => "Weebly.proAccount6-b2",
				),
				'higher6-final' => array(
					'proAccount12' => "Weebly.proAccount12-b",
					'proAccount24' => "Weebly.proAccount24-b",
					'proAccount6' => "Weebly.proAccount6-b2",
				),
				'low-final' => array(
					'proAccount12' => "Weebly.proAccount12-b",
					'proAccount24' => "Weebly.proAccount24-b",
					'proAccount6' => "Weebly.proAccount6-b",
				),
				'normal' => array(
					'proAccount12' => "Weebly.proAccount12-b",
					'proAccount24' => "Weebly.proAccount24-b",
					'proAccount6' => "Weebly.proAccount6-b",
				),
			),
		),
		'Weebly.userhome.overlay' => array(
			'weights' => array(
				'chosen' => 10,
				'rejects' => 90,
				'automated_test' => 0
			),
			'segments' => array(
				'chosen' => array(
					'show_survey' => 'true'
				),
				'rejects' => array(
					'show_survey' => 'false'
				),
				'automated_test' => array(
					'show_survey' => 'false'
				)
			)
		),
		'Weebly.retargeting' => array(
			'weights' => array(
				'control' => 50,
				'retargeted' => 50,
			),
			'segments' => array(
				'control' => array(
					'tracking' => "false",
				),
				'retargeted' => array(
					'tracking' => "true",
				),
			),
		),
		'Weebly.sharingUI' => array(
			'weights' => array(
				'button' => 50,
				'tab' => 50,
			),
			'segments' => array(
				'button' => array(
					'uifeature' => "button",
				),
				'tab' => array(
					'uifeature' => "tab",
				),
			),
		),
		'Weebly.showCustomSite' => array(
			'weights' => array(
				'no' => 50,
				'yes' => 50,
			),
			'segments' => array(
				'no' => array(
					'showprompt' => "0",
				),
				'yes' => array(
					'showprompt' => "1",
				),
			),
		),
		'Weebly.sslLogo' => array(
			'weights' => array(
				'hackersafe' => 33,
				'truste' => 33,
				'verisign' => 33,
			),
			'segments' => array(
				'hackersafe' => array(
					'showlogo' => "hackersafe",
				),
				'truste' => array(
					'showlogo' => "truste",
				),
				'verisign' => array(
					'showlogo' => "verisign",
				),
			),
		),
		'Weebly.trusteLogo' => array(
			'weights' => array(
				'no' => 50,
				'yes' => 50,
			),
			'segments' => array(
				'no' => array(
					'showlogo' => "no",
				),
				'yes' => array(
					'showlogo' => "yes",
				),
			),
		),
		'Weebly.upgrade.fullAddress' => array(
			'weights' => array(
				'full' => 50,
				'min' => 50,
			),
			'segments' => array(
				'full' => array(
					'avs' => "full",
				),
				'min' => array(
					'avs' => "min",
				),
			),
		),
		'Weebly.upgradeOnSignup' => array(
			'weights' => array(
				'two-no' => 50,
				'two-yes' => 50,
			),
			'segments' => array(
				'no1' => array(
					'upgradePrompt' => "0",
				),
				'no2' => array(
					'upgradePrompt' => "0",
				),
				'no3' => array(
					'upgradePrompt' => "0",
				),
				'no4' => array(
					'upgradePrompt' => "0",
				),
				'two-no' => array(
					'upgradePrompt' => "0",
				),
				'two-yes' => array(
					'upgradePrompt' => "1",
				),
				'yes' => array(
					'upgradePrompt' => "1",
				),
			),
		),
		// In test show comparison page first when the billing window opens,
		// instead of the payment form first.
		'purchase.upgradeComparePlans' => array(
			'weights' => array(
				'control' => 100,
				'test' => 0
			),
			'segments' => array(
				'control' => array(
					'showComparison' => 'no'
				),
				'test' => array(
					'showComparison' => 'yes'
				)
			)
		),
		// On billing pages, display the term "eCommerce" instead of "business"
		// for users in the test bucket
		// We only want to bucket new users, so don't use $ab->getVariable without setting autoAssign to false
		'purchase.businessToECommerce' => array(
			'weights' => array(
				'control' => 50,
				'test' => 50
			),
			'segments' => array(
				'control' => array(
					'showECommerce' => 0
				),
				'test' => array(
					'showECommerce' => 1
				)
			)
		),
		// In test show comparison page first when the billing window opens,
		// instead of the payment form first.
		// This is specifically for paid traffic.
		'purchase.paidUpgradeComparePlans' => array(
			'weights' => array(
				'control' => 50,
				'test' => 50
			),
			'segments' => array(
				'control' => array(
					'showComparison' => 'no'
				),
				'test' => array(
					'showComparison' => 'yes'
				)
			)
		),
		'purchase.defaultBusinessMonths' => array(
			'weights' => array(
				'control' => 50,
				'test' => 50
			),
			'segments' => array(
				'control' => array(
					'months' => '12'
				),
				'test' => array(
					'months' => '1'
				)
			)
		),
		// Test the onboarding flow without the site selector, as it was before the ecommerce launch
		// Control: Shows site type selector, page sets created.
		// Test: No site type selector, goes staight to theme chooser, basic page created.
		'onboarding.siteTypeSelector' => array(
			'weights' => array(
				'control' => 100,
				'test' => 0,
				'automated_test' => 0
			),
			'segments' => array(
				'control' => array(
					'showSelector' => 'yes'
				),
				'test' => array(
					'showSelector' => 'no'
				),
				'automated_test' => array(
					'showSelector' => 'yes'
				)
			)
		),
		'billing.enableTaxes' => array(
			'weights' => array(
				'control' => 50,
				'test' => 50
			),
			'segments' => array(
				'control' => array(
					'enableTaxes' => 'no'
				),
				'test' => array(
					'enableTaxes' => 'yes'
				)
			)
		),
		// Testing the new SYS Homepage
		// ----------------------------
		// The initial test was 95/5, with two segments named "control" and "test".  We've since moved
		// to a 50/50 test, and the old weights are removed so they don't get bucketed at all. The new
		// test weights/segments are prepended with "en_", as they are segmented to only english speaking
		// segments of North America.
		'Weebly.SYS.Homepage' => array(
			'weights' => array(
				'en_control' => 50,
				'en_test' => 50,
				'automated_test' => 0
			),
			'segments' => array(
				'control' => array(
					'showNew' => false
				),
				'test' => array(
					'showNew' => true
				),
				'en_control' => array(
					'showNew' => false
				),
				'en_test' => array(
					'showNew' => true
				),
				'automated_test' => array(
					'showNew' => false
				)
			)
		),
		// Testing the second iteration of the SYS Homepage
		// ----------------------------
		'Weebly.SYSv2.Homepage' => array(
			'weights' => array(
				'control' => 50,
				'test' => 50,
				'automated_test' => 0
			),
			'segments' => array(
				'control' => array(
					'version' => 'carbon'
				),
				'test' => array(
					'version' => 'oxygen'
				),
				'automated_test' => array(
					'version' => 'carbon'
				)
			)
		),
		// Test showing a pricing section on the homepage
		// and allowing user to signup through there.
		'Weebly.Homepage.Pricing' => array(
			'weights' => array(
				'control' => 0,
				'test' => 100,
				'test_plan_on_signup' => 0,
				'control2' => 0,
				'test_plan_on_signup2' => 0,
				'automated_test' => 0
			),
			'segments' => array(
				'control' => array(
					'showPricing' => 'no'
				),
				'test' => array(
					'showPricing' => 'yes'
				),
				'test_plan_on_signup' => array(
					'showPricing' => 'signup'
				),
				'control2' => array(
					'showPricing' => 'no'
				),
				'test_plan_on_signup2' => array(
					'showPricing' => 'signup'
				),
				'automated_test' => array(
					'showPricing' => 'no'
				)
			)
		),
		// Test giving users a free trial of a premium plan when they signup and select a paid plan.
		// One test group will collect the credit card number on signup, the other will not
		'Signup.FreeTrial' => array(
			'weights' => array(
				'control' => 0,
				'control_without_cc' => 0,
				'with_credit_card' => 0,
				'without_credit_card' => 0,
				'no_trial_with_page_limit' => 0,
				'no_trial_no_page_limit' => 100,
				'no_trial_ten_page_free_limit' => 0,
				'without_credit_card_with_page_limit' => 0,
				'no_test_control' => 0,
				'automated_test' => 0
			),
			'segments' => array(
				'control' => array(
					'freeTrial' => 'no',
				),
				'control_without_cc' => array(
					'freeTrial' => 'without_credit_card',
				),
				'without_credit_card' => array(
					'freeTrial' => 'without_credit_card',
				),
				'with_credit_card' => array(
					'freeTrial' => 'with_credit_card',
				),
				'no_trial_with_page_limit' => array(
					'freeTrial' => 'no',
				),
				'no_trial_no_page_limit' => array(
					'freeTrial' => 'no',
				),
				'no_trial_ten_page_free_limit' => array(
					'freeTrial' => 'no',
				),
				'without_credit_card_with_page_limit' => array(
					'freeTrial' => 'without_credit_card',
				),
				'no_test_control' => array(
					'freeTrial' => 'no',
				),
				'automated_test' => array(
					'freeTrial' => 'no',
				),
				'manual_without_credit_card' => array(
					'freeTrial' => 'without_credit_card',
				),
				'manual_with_credit_card' => array(
					'freeTrial' => 'with_credit_card',
				)
			)
		),
		// Test charging sales tax for users in NY on premium plans and Google apps.
		'billing.chargeNyTaxes' => array(
			'weights' => array(
				'control' => 100,
				'with_ny_taxes' => 0
			),
			'segments' => array(
				'control' => array(
					'charge_tax' => 'no'
				),
				'with_ny_taxes' => array(
					'charge_tax' => 'yes'
				)
			)
		),
		/**
		 * Determines if a customer sees the support phone number in a few places
		 * like the purchase screen, plan comparison, editor, and user home.
		 */
		'support.showPhoneNumber' => array(
			'weights' => array(
				'control' => 0,
				'number_visible' => 100
			),
			'segments' => array(
				'control' => array(
					'show_number' => 'yes'
				),
				'number_visible' => array(
					'show_number' => 'yes'
				)
			)
		),
		/**
		 * Determines if new customers see "Live Support" controls (phone number and live chat)
		 */
		'support.showLiveSupport' => array(
			'weights' => array(
				// V1 of the test, started as 80% test, 20% control
				'control' => 0,
				'test' => 0,
				// V2 of test, acted as 60% test, 40% control.  Accidentally pushed a misnamed
				// test name here, so it's staying as 'control2' rather than 'test1' so that existing
				// bucketed users do not throw errors.
				'control1' => 0,
				'control2' => 0,
				// V3 of test, acts as 40% test, 60% control.  Changed test naming structure due to my
				// previous naming blunder.  New format is `<container>_v<version>`
				'control_v3' => 0,
				'test_v3' => 0,
				// V4 of test, lowering test percentage to 30%, 70% for control. Sprint task 8545
				'control_v4' => 70,
				'test_v4' => 30
			),
			'segments' => array(
				// V1
				'control' => array('support_visible' => false),
				'test' => array('support_visible' => true),
				// V2
				'control1' => array('support_visible' => false),
				'control2' => array('support_visible' => true),
				// V3
				'control_v3' => array('support_visible' => false),
				'test_v3' => array('support_visible' => true),
				// V4
				'control_v4' => array('support_visible' => false),
				'test_v4' => array('support_visible' => true)
			)
		),
		/**
		 * Test preselecting Country in the billing window based upon IP address for
		 * countries in the EU. This is related to VAT collection.
		 */
		'billing.preselectCountry' => array(
			'weights' => array(
				'control' => 100,
				'test_preselected' => 0
			),
			'segments' => array(
				'control' => array(
					'preselect' => 'no'
				),
				'test_preselected' => array(
					'preselect' => 'yes'
				)
			)
		),
		/**
		 * Displays proactive chat in the editor to new users
		 */
		'support.proactiveChat' => array(
			'weights' => array(
				'control' => 50,
				'test' => 50,
				'automated_test' => 0
			),
			'segments' => array(
				'control' => array(
					'chatEnabled' => false
				),
				'test' => array(
					'chatEnabled' => true
				),
				'automated_test' => array(
					'chatEnabled' => false
				)
			)
		),
		/**
		 * Displays proactive chat in the editor to new users
		 */
		'support.proactiveChatv2' => array(
			'weights' => array(
				'control' => 0,
				'test' => 0,
				'automated_test' => 0,
				'control_2' => 80,
				'test_2' => 20
			),
			'segments' => array(
				'control' => array(
					'chatEnabled' => false
				),
				'test' => array(
					'chatEnabled' => true
				),
				'automated_test' => array(
					'chatEnabled' => false
				),
				'control_2' => array(
					'chatEnabled' => false
				),
				'test_2' => array(
					'chatEnabled' => true
				),
			)
		),
		/**
		 * Displays proactive chat in the editor to new users
		 */
		'support.proactiveChatv3' => array(
			'weights' => array(
				'control' => 70,
				'test' => 30,
				'automated_test' => 0
			),
			'segments' => array(
				'control' => array(
					'chatEnabled' => false
				),
				'test' => array(
					'chatEnabled' => true
				),
				'automated_test' => array(
					'chatEnabled' => false
				),
			)
		),
		/**
		 * This tests is used to determine
		 * if we should show the new youtube
		 * video on the homepage
		 *
		 * - testA => users who will be shown the new video, no background slideshow, and new video text
		 * - testB => users who will be shown the new video, no background slideshow, and different video text
		 * - control => users who will not be included in any of the above
		 * exclude
		 */
		'homepage.slideshow.video' => array(
			'weights' => array(
				'final' => 100
			),
			'segments' => array(
				'control' => array(
					'slideshowRemoved' => false,
					'videoId' => 'LJZVcNNWyhk',
					'videoText' => 'Watch our TV Commercial'
				),
				'test1' => array(
					'slideshowRemoved' => true,
					'videoId' => 'ZT-KxtS2x_I',
					'videoText' => 'Learn more'
				),
				'final' => array(
					'slideshowRemoved' => true,
					'videoId' => 'ZT-KxtS2x_I',
					'videoText' => 'See how it works'
				),
				'automated_test' => array(
					'slideshowRemoved' => false,
					'videoId' => 'LJZVcNNWyhk',
					'videoText' => 'Watch our TV Commercial'
				)
			)
		),
		/**
		 * This test changes the Theme Selector during onboarding.  Each test is a slight variation
		 * on the same concept, outlined below:
		 *
		 * Control: No changes at all (Also known as Test A in the jabwire ticket)
		 * Test B : The top 30 themes, in their current order
		 * Test C : The top 30 themes, in random order
		 * Test D : The top 30 themes, in random order, with short-header as the default
		 *
		 */
		'growth.themeGallery' => array(
			'weights' => array(
				// V1 of the test
				'control' => 0,
				'test_b'  => 0,
				'test_c'  => 0,
				'test_d'  => 0,
				// V2 of the test
				'control_v2' => 50,
				'test_a_v2'  => 50,
				// Autmated Testing Bucket
				'automated_test' => 0
			),
			'segments' => array(
				// V1 of the test
				'control' => array(
					'limitThemes' => false,
					'randomizeThemes' => false,
					'headerType' => 'landing',
					'sortByConversion' => false,
					'hideFilters' => false
				),
				'test_b' => array(
					'limitThemes' => true,
					'randomizeThemes' => false,
					'headerType' => 'landing',
					'sortByConversion' => false,
					'hideFilters' => false
				),
				'test_c' => array(
					'limitThemes' => true,
					'randomizeThemes' => true,
					'headerType' => 'landing',
					'sortByConversion' => false,
					'hideFilters' => false
				),
				'test_d' => array(
					'limitThemes' => true,
					'randomizeThemes' => true,
					'headerType' => 'short-header',
					'sortByConversion' => false,
					'hideFilters' => false
				),
				// V2 of the test
				'control_v2' => array(
					'limitThemes' => true,
					'randomizeThemes' => false,
					'headerType' => 'landing',
					'sortByConversion' => false,
					'hideFilters' => true
				),
				'test_a_v2' => array(
					'limitThemes' => true,
					'randomizeThemes' => false,
					'headerType' => 'landing',
					'sortByConversion' => true,
					'hideFilters' => true
				),
				// Automated Test
				'automated_test' => array(
					'limitThemes' => false,
					'randomizeThemes' => false,
					'headerType' => 'landing',
					'sortByConversion' => false,
					'hideFilters' => false
				)
			)
		),
		/**
		 * Test changing the word 'free' in the upper left of the editor to the word 'upgrade'
		 */
		'editor.upgrade.linkChange' => array(
			'weights' => array(
				'control' => 50,
				'test' => 50,
			),
			'segments' => array(
				'control' => array(
					'showUpgradeText' => 0
				),
				'test' => array(
					'showUpgradeText' => 1
				)
			)
		),
		'reactivation.email.btw-30-90-days' => array(
			'unusualWeights' => true,
			'weights' => array(
				'phase-1_btw-30-90-days_control' => 1, // These users will not receive any emails, but they are segmented for comparison.
				'phase-1_btw-30-90-days_coupon-25' => 1,
				'phase-1_btw-30-90-days_coupon-33' => 1,
				'phase-1_btw-30-90-days_no-offer' => 1,
				'phase-2_btw-30-90-days_email' => 1,
				'phase-2_btw-30-90-days_email-and-fb' => 1,
				'phase-3_btw-30-90-days_auto-login' => 1,
				'phase-3_btw-30-90-days_dumb-login' => 1,
				'phase-4_btw-30-90-days' => 8 // Should be twice as much as the sum of the other segments.
			),
			// For this A/B test, the segment is going to be referenced for the most
			// part instead of using variables, but variables are included here for
			// clarity about what these buckets mean.
			// (One of the reasons for looking at the segment is that we won't know
			// what the winner of each phase is until it's complete. For example,
			// if coupon33 wins in phase 1, then phase 2 will also use coupon33 later.)
			'segments' => array(
				'phase-1_btw-30-90-days_control' => array(
					'couponAmount' => '0',
					'sendEmail' => '0',
					'useFacebook' => '0',
					'loginType' => 'auto'
				),
				'phase-1_btw-30-90-days_coupon-25' => array(
					'couponAmount' => '25',
					'sendEmail' => '1',
					'useFacebook' => '0',
					'loginType' => 'auto'
				),
				'phase-1_btw-30-90-days_coupon-33' => array(
					'couponAmount' => '33',
					'sendEmail' => '1',
					'useFacebook' => '0',
					'loginType' => 'auto'
				),
				'phase-1_btw-30-90-days_no-offer' => array(
					'couponAmount' => '0',
					'sendEmail' => '1',
					'useFacebook' => '0',
					'loginType' => 'auto'
				),
				'phase-2_btw-30-90-days_email' => array(
					'couponAmount' => '0',
					'sendEmail' => '1',
					'useFacebook' => '0',
					'loginType' => 'auto'
				),
				'phase-2_btw-30-90-days_email-and-fb' => array(
					'couponAmount' => '0',
					'sendEmail' => '1',
					'useFacebook' => '1',
					'loginType' => 'auto'
				),
				'phase-3_btw-30-90-days_auto-login' => array(
					'couponAmount' => '0',
					'sendEmail' => '1',
					'useFacebook' => '0',
					'loginType' => 'auto'
				),
				'phase-3_btw-30-90-days_dumb-login' => array(
					'couponAmount' => '0',
					'sendEmail' => '1',
					'useFacebook' => '0',
					'loginType' => 'dumb'
				),
				'phase-4_btw-30-90-days' => array(
					'couponAmount' => '0',
					'sendEmail' => '1',
					'useFacebook' => '0',
					'loginType' => 'auto'
				),
			)
		),
		'reactivation.email.gt-90-days' => array(
			'unusualWeights' => true,
			'weights' => array(
				'phase-0_gt-90-days_coupon-25' => 0,
				'phase-0_gt-90-days_coupon-33' => 0,
				'phase-0_gt-90-days_no-offer' => 0,
				'phase-1_gt-90-days_control' => 1, // These users will not receive any emails, but they are segmented for comparison.
				'phase-1_gt-90-days_coupon-25' => 1,
				'phase-1_gt-90-days_coupon-33' => 1,
				'phase-1_gt-90-days_no-offer' => 1,
				'phase-2_gt-90-days_email' => 1,
				'phase-2_gt-90-days_email-and-fb' => 1,
				'phase-3_gt-90-days_auto-login' => 1,
				'phase-3_gt-90-days_dumb-login' => 1,
				'phase-4_gt-90-days' => 8 // Should be twice as much as the sum of the other segments.
			),
			// For this A/B test, the segment is going to be referenced for the most
			// part instead of using variables, but variables are included here for
			// clarity about what these buckets mean.
			// (One of the reasons for looking at the segment is that we won't know
			// what the winner of each phase is until it's complete. For example,
			// if coupon33 wins in phase 1, then phase 2 will also use coupon33 later.)
			'segments' => array(
				'phase-0_gt-90-days_coupon-25' => array(
					'couponAmount' => '25',
					'sendEmail' => '1',
					'useFacebook' => '0',
					'loginType' => 'auto'
				),
				'phase-0_gt-90-days_coupon-33' => array(
					'couponAmount' => '33',
					'sendEmail' => '1',
					'useFacebook' => '0',
					'loginType' => 'auto'
				),
				'phase-0_gt-90-days_no-offer' => array(
					'couponAmount' => '0',
					'sendEmail' => '1',
					'useFacebook' => '0',
					'loginType' => 'auto'
				),
				'phase-1_gt-90-days_control' => array(
					'couponAmount' => '0',
					'sendEmail' => '0',
					'useFacebook' => '0',
					'loginType' => 'auto'
				),
				'phase-1_gt-90-days_coupon-25' => array(
					'couponAmount' => '25',
					'sendEmail' => '1',
					'useFacebook' => '0',
					'loginType' => 'auto'
				),
				'phase-1_gt-90-days_coupon-33' => array(
					'couponAmount' => '33',
					'sendEmail' => '1',
					'useFacebook' => '0',
					'loginType' => 'auto'
				),
				'phase-1_gt-90-days_no-offer' => array(
					'couponAmount' => '0',
					'sendEmail' => '1',
					'useFacebook' => '0',
					'loginType' => 'auto'
				),
				'phase-2_gt-90-days_email' => array(
					'couponAmount' => '0',
					'sendEmail' => '1',
					'useFacebook' => '0',
					'loginType' => 'auto'
				),
				'phase-2_gt-90-days_email-and-fb' => array(
					'couponAmount' => '0',
					'sendEmail' => '1',
					'useFacebook' => '1',
					'loginType' => 'auto'
				),
				'phase-3_gt-90-days_auto-login' => array(
					'couponAmount' => '0',
					'sendEmail' => '1',
					'useFacebook' => '0',
					'loginType' => 'auto'
				),
				'phase-3_gt-90-days_dumb-login' => array(
					'couponAmount' => '0',
					'sendEmail' => '1',
					'useFacebook' => '0',
					'loginType' => 'dumb'
				),
				'phase-4_gt-90-days' => array(
					'couponAmount' => '0',
					'sendEmail' => '1',
					'useFacebook' => '0',
					'loginType' => 'auto'
				),
				'phase-1_btw-30-90-days_control' => array(
					'couponAmount' => '0',
					'sendEmail' => '0',
					'useFacebook' => '0',
					'loginType' => 'auto'
				),
				'phase-1_btw-30-90-days_coupon-25' => array(
					'couponAmount' => '25',
					'sendEmail' => '1',
					'useFacebook' => '0',
					'loginType' => 'auto'
				),
				'phase-1_btw-30-90-days_coupon-33' => array(
					'couponAmount' => '33',
					'sendEmail' => '1',
					'useFacebook' => '0',
					'loginType' => 'auto'
				),
				'phase-1_btw-30-90-days_no-offer' => array(
					'couponAmount' => '0',
					'sendEmail' => '1',
					'useFacebook' => '0',
					'loginType' => 'auto'
				),
				'phase-2_btw-30-90-days_email' => array(
					'couponAmount' => '0',
					'sendEmail' => '1',
					'useFacebook' => '0',
					'loginType' => 'auto'
				),
				'phase-2_btw-30-90-days_email-and-fb' => array(
					'couponAmount' => '0',
					'sendEmail' => '1',
					'useFacebook' => '1',
					'loginType' => 'auto'
				),
				'phase-3_btw-30-90-days_auto-login' => array(
					'couponAmount' => '0',
					'sendEmail' => '1',
					'useFacebook' => '0',
					'loginType' => 'auto'
				),
				'phase-3_btw-30-90-days_dumb-login' => array(
					'couponAmount' => '0',
					'sendEmail' => '1',
					'useFacebook' => '0',
					'loginType' => 'dumb'
				),
				'phase-4_btw-30-90-days' => array(
					'couponAmount' => '0',
					'sendEmail' => '1',
					'useFacebook' => '0',
					'loginType' => 'auto'
				),
			)
		),
		'growth.autoplayOnboardingVideo' => array(
			'weights' => array(
				'control' => 50,
				'test' => 50,
				'automated_test' => 0,
			),
			'segments' => array(
				'control' => array(
					'autoplay' => '1'
				),
				'test' => array(
					'autoplay' => '0'
				),
				'automated_test' => array(
					'autoplay' => '1'
				)
			)
		),
		/**
		 * Test homepage scroll behavior
		 */
		'homepage.smoothScroll' => array(
			'weights' => array(
				'control' => 0,
				'final' => 100,
				'exclude' => 0,
				'automated_test' => 0,
			),
			'segments' => array(
				'control' => array(
					'smoothScroll' => '0'
				),
				'final' => array(
					'smoothScroll' => '1'
				),
				'exclude' => array(
					'smoothScroll' => '0'
				),
				'automated_test' => array(
					'smoothScroll' => '0'
				)
			)
		),
		/**
		 * Test homepage header panel new design
		 */
		'homepage.conciseHeaderPanel' => array(
			'weights' => array(
				'control' => 50,
				'test' => 50,
				'exclude' => 0,
				'automated_test' => 0
			),
			'segments' => array(
				'control' => array(
					'homepageVersion' => 'carbon'
				),
				'test' => array(
					'homepageVersion' => 'concise'
				),
				'exclude' => array(
					'homepageVersion' => 'carbon'
				),
				'automated_test' => array(
					'homepageVersion' => 'carbon'
				)
			)
		),
		'protips' => array(
			'weights' => array(
				'control' => 25,
				'test-a' => 25,
				'test-b' => 25,
				'test-c' => 25
			),
			'segments' => array(
				'control' => array(
					'showProtip' => false
				),
				'test-a' => array(
					'showProtip' => true
				),
				'test-b' => array(
					'showProtip' => true
				),
				'test-c' => array(
					'showProtip' => true
				)
			)
		),
		/**
		 * Test changes to cancel subscription flow
		 */
		'cancel.subscription' => array(
			'weights' => array(
				'control' => 50,
				'test' => 50,
				'exclude' => 0,
				'automated_test' => 0,
			),
			'segments' => array(
				'control' => array(
					'adjustCancellation' => '0'
				),
				'test' => array(
					'adjustCancellation' => '1'
				),
				'exclude' => array(
					'adjustCancellation' => '0'
				),
				'automated_test' => array(
					'adjustCancellation' => '0'
				)
			)
		),
		/**
		 * Test reactive chat in editor
		 */
		'growth.reactiveChat' => array(
			'weights' => array(
				'control' => 80,
				'test' => 20
			),
			'segments' => array(
				'control' => array(
					'showReactiveChat' => false
				),
				'test' => array(
					'showReactiveChat' => true
				)
			)
		)
	);
foreach ($tests as $testName => $test) {

	$filename = $testName;
	$filename = preg_replace('/[-.]/', ' ', $filename);
	$filename = ucwords($filename);
	$filename = preg_replace('/ /', '', $filename);
	$filename = $filename . "ABTest";




	$output = "<?php

namespace ABTest\\ABTests;

/**
 * Class $filename
 * @package ABTest\ABTests
 */
class $filename extends ABTest {

	/**
	 * Gets the name of this ABTest
	 *
	 * @return string
	 */
	public function getName()
	{
		return '";
	$output .= $testName;
	$output .= "';
	}

	/**
	 * Gets an array of weights for this test
	 *
	 * @return array
	 */
	public function getWeights()
	{
		return array(";

	foreach ($test['weights'] as $weightName => $weight) {
		$output .= "
			'$weightName' => $weight,";
	}
	$output .= "
		);
	}

	/**
	 * Gets an array of segments for this test
	 *
	 * @return array
	 */
	public function getSegments()
	{
		return array(";

	foreach ($test['segments'] as $segmentName => $segment) {
		// handle segment
		$output .= "
			'$segmentName' => array(";
		foreach ($segment as $segmentVar => $segmentVal) {
			switch (gettype($segmentVal)) {
				case 'boolean':
				case 'integer':
					$output .= "
				'$segmentVar' => $segmentVal,";
					break;
				default:
					$output .= "
				'$segmentVar' => \"$segmentVal\",";
					break;
			}
		}
		$output .= "
			),";
	}
	$output .= "
		);
	}
}";

	file_put_contents('/Users/drivera/Desktop/thing/' . $filename . '.php', $output);
}
