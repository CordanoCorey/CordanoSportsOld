//
//  GamesViewController.m
//  CordanoSports
//
//  Created by Corey Gelbaugh on 2/17/14.
//  Copyright (c) 2014 Corey Gelbaugh. All rights reserved.
//

#import "GamesViewController.h"

@interface GamesViewController ()

@end

@implementation GamesViewController

@synthesize checkInButton=_checkInButton;
@synthesize textField=_textField;

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
	// Do any additional setup after loading the view.
}

- (IBAction)go:(id)sender
{
    [self.textField resignFirstResponder];
    
    NSString *s = [NSString stringWithFormat:@"Hello, %@!", self.textField.text];
    UIAlertView *alert = [[UIAlertView alloc] initWithTitle:@"Hello"
                                                    message:s
                                                   delegate:nil
                                          cancelButtonTitle:@"Thanks!"
                                          otherButtonTitles:nil];
    [alert show];
}

- (void)didReceiveMemoryWarning
{
    [super didReceiveMemoryWarning];
    // Dispose of any resources that can be recreated.
}

@end
