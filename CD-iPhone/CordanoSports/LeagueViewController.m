//
//  LeagueViewController.m
//  CordanoSports
//
//  Created by Corey Gelbaugh on 2/25/14.
//  Copyright (c) 2014 Corey Gelbaugh. All rights reserved.
//

#import "LeagueViewController.h"

@interface LeagueViewController ()

@end

@implementation LeagueViewController

- (id)initWithNibName:(NSString *)nibNameOrNil bundle:(NSBundle *)nibBundleOrNil
{
    self = [super initWithNibName:nibNameOrNil bundle:nibBundleOrNil];
    if (self) {
        // Custom initialization
    }
    return self;
}

- (void)viewDidLoad
{
    [super viewDidLoad];
	NSLog(@"%@", self.delegate);
}

- (void)didReceiveMemoryWarning
{
    [super didReceiveMemoryWarning];
    // Dispose of any resources that can be recreated.
}

@end
